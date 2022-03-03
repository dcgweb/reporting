<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API;
use Illuminate\Support\Facades\Config;

class TransactionController extends Controller
{
    public function index($transaction)
    {
        $response = API::query(
            Config::get('constants.endpoints.transaction'),
            [
                Config::get('constants.params.transaction_param_transaction_id') => $transaction
            ],
            API::get_or_update_token()
        );
        return view('transaction', ['transaction' => $response]);
    }
}
