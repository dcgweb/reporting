<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\API;
use Illuminate\Support\Facades\Http;

class Report extends Model
{
    use HasFactory;

    public static function fetch($fromDate = null, $toDate = null, $merchant = null, $acquirer = null)
    {
        // if ($fromDate == null) {
        //     return false;
        // }

        #return API::get_or_update_token();
    }
}
