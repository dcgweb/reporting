<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use App\Models\API;
use Illuminate\Support\Facades\Config;

class ReportsController extends Controller
{
    public function index()
    {
        $response = API::query(
            Config::get('constants.endpoints.report'),
            ['fromDate' => "2015-07-01"],
            API::get_or_update_token()
        );
        return view('report', ['response' => $response]);
    }
}
