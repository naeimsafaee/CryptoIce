<?php


return [
    'SMS_API' => '31476D664A7A6F63646B47384E324B6B434B55546B746E68696934454837636E',

    "NODE_URL" => "http://node.cryptooice.com",
    "STRIPE_PUBLIC_KEY" => env('STRIPE_PUBLIC_KEY'),
    "STRIPE_SECRET" => env('STRIPE_SECRET'),
    "CLIENT_SECRET" => env('CLIENT_SECRET'),
    "VISA_CHECKOUT_ID" => env('VISA_CHECKOUT_ID'),
//    "NODE_URL" => "http://localhost:3001",

    "TEXT" => [
        1 => "Home",
        2 => "Mail",
        3 => "Verify Email",
        4 => "Forget password",
        5 => "Form",
        6 => "Header",
        7 => "Auth",
        8 => "Common",
        9 => "Register",
        10 => "Blog",
        11 => "profile",
        12 => "change_password",
        13 => "security",
        14 => "services",
        15 => "footer",
        16 => "contact_us",
        17 => "FAQ",
        18 => "search"
    ],
    "coin_gecko_url" => "https://api.coingecko.com/api/v3/",
    "IntermediateRequest" => [
        0 => "requested",
        1 => "accepted",
        2 => "not accepted"
    ],
    "AdvanceRequest" => [
        0 => "requested",
        1 => "accepted",
        2 => "not accepted"
    ],
    "TransactionStatus" => [
        0 => "Pending",
        1 => "Done",
        2 => "Failed"
    ],

];
