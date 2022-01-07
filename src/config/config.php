<?php
return [
    'url' => env('AAMARPAY_SANDBOX_URL', 'https://sandbox.aamarpay.com/request.php'), //Sandbox
    // 'url' => env('AAMARPAY_PRODUCTION_URL', 'https://secure.aamarpay.com/request.php'), //Live url
    'success_url' => env('AAMARPAY_PRODUCTION_URL', 'http://127.0.0.1:8000/success'),
    'fail_url' => env('AAMARPAY_PRODUCTION_URL', 'http://127.0.0.1:8000/fail'),
    'cancel_url' => env('AAMARPAY_PRODUCTION_URL', 'http://127.0.0.1:8000/cancel'),
    'currency' => 'BDT',
    'signature' => env('AAMARPAY_SIGNATURE', 'dbb74894e82415a2f7ff0ec3a97e4183'),
    'merchant_id' => env('AAMARPAY_MERCHANT_ID', 'aamarpaytest'),
    'store_id' => env('AAMARPAY_STORE_ID', 'aamarpaytest')
];
