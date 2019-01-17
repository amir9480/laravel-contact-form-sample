<?php

return [
    'email' => env('CONTACT_EMAIL'),
    'recaptcha' => [
        'site' => env('RECAPTCHA_SITE'),
        'secret' => env('RECAPTCHA_SECRET'),
    ]
];
