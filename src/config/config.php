<?php
return [
    // 'url' => env('AAMARPAY_SANDBOX_URL', 'https://sandbox.aamarpay.com/request.php'), //Sandbox
    'url' => env('AAMARPAY_PRODUCTION_URL', 'https://secure.aamarpay.com/request.php'), //Live url
    'success_url' => env('AAMARPAY_PRODUCTION_URL', 'http://127.0.0.1:8000/success'),
    'fail_url' => env('AAMARPAY_PRODUCTION_URL', 'http://127.0.0.1:8000/fail'),
    'cancel_url' => env('AAMARPAY_PRODUCTION_URL', 'http://127.0.0.1:8000/cancel'),
    'currency' => 'BDT',
    'signature' => env('AAMARPAY_SIGNATURE', '7deac7824afd2b97b438ae1c994abcba'),
    'merchant_id' => env('AAMARPAY_MERCHANT_ID', 'mushbhaischool'),
    'store_id' => env('AAMARPAY_STORE_ID', 'mushbhaischool')
];
