<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API;
use Illuminate\Support\Facades\Config;

class ClientController extends Controller
{
    public function index($transactionId)
    {
        $response = API::query(
            Config::get('constants.endpoints.client'),
            [
                Config::get('constants.params.client_param_transaction_id') => $transactionId
            ],
            API::get_or_update_token()
        );
        return view('client', ['client' => $response, 'transaction' => $transactionId]);
    }
}
