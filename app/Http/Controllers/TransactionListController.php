<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API;
use Illuminate\Support\Facades\Config;

class TransactionListController extends Controller
{
    public function index()
    {
        return view('transaction_list');
    }

    public function data()
    {
        $response = API::query(
            Config::get('constants.endpoints.transaction_list'),
            [
                Config::get('constants.params.trans_list_param_from_date') => "2015-07-01"
            ],
            API::get_or_update_token()
        );

        return response()->json($response);
    }
}
