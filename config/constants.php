<?php

return [
    'endpoints' => [
            'login' => 'https://sandbox-reporting.rpdpymnt.com/api/v3/merchant/user/login',
            'report' => 'https://sandbox-reporting.rpdpymnt.com/api/v3/transactions/report',
            'transaction_list' => 'https://sandbox-reporting.rpdpymnt.com/api/v3/transaction/list',
            'transaction' => 'https://sandbox-reporting.rpdpymnt.com/api/v3/transaction',
            'client' => 'https://sandbox-reporting.rpdpymnt.com/api/v3/client'
    ],
    'params' => [
        'auth_param_header' => 'Authorization',
        'login_param_email' => 'email',
        'login_param_password' => 'password',
        'report_param_from_date' => 'fromDate',
        'report_param_to_date' => 'toDate',
        'report_param_merchant' => 'merchant',
        'report_param_acquirer' => 'acquirer',
        'trans_list_param_from_date' => 'fromDate',
        'trans_list_param_to_date' => 'toDate',
        'trans_list_param_from_status' => 'status',
        'trans_list_param_from_operation' => 'operation',
        'trans_list_param_from_merchant_id' => 'merchantId',
        'trans_list_param_from_acquirer_id' => 'acquirerId',
        'trans_list_param_from_payment_method' => 'paymentMethod',
        'trans_list_param_from_error_code' => 'errorCode',
        'trans_list_param_from_filter_field' => 'filterField',
        'trans_list_param_from_filter_value' => 'filterValue',
        'trans_list_param_from_page' => 'page',
        'transaction_param_transaction_id' => 'transactionId',
        'client_param_transaction_id' => 'transactionId'
    ],
    'token_reset_minutes' => 10,
    'api_return_declined' => 'DECLINED'
];
