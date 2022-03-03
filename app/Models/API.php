<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class API extends Model
{
    use HasFactory;
    public static function get_or_update_token()
    {
        # Get profile
        $profile = User::findOrFail(Auth::user()->id)->profile;
        
        # Check if `token_acquired_at` is expired

        if ($profile->token_acquired_at == null || (time() - strtotime($profile->token_acquired_at))/60 >= Config::get('constants.token_reset_minutes')) {
            ## Expired
            $response = Http::post(
                Config::get('constants.endpoints.login'),
                [
                    Config::get('constants.params.login_param_email') => $profile->api_username,
                    Config::get('constants.params.login_param_password') => $profile->api_password
                ]
            )->getBody()->getContents();

            

            $profile->token_acquired_at = date('Y-m-d H:i:s');
            $profile->api_token = json_decode($response)->token;
            $profile->push();
        }
        # regardless, return from db
        return $profile->api_token;
    }

    public static function query($endpoint = null, $params = null, $token = null)
    {
        if ($token == null || $params == null || $endpoint == null) {
            return false;
        }
        $response = Http::withHeaders([
            "Authorization" => $token
        ])->post(
            $endpoint,
            $params
        )->getBody()->getContents();


        $json_response = json_decode($response);

        if (property_exists($json_response, 'status')) {
            if ($json_response->status == Config::get('constants.api_return_declined')) {
                return $json_response->message;
            }
        }
        return $json_response;
    }
}
