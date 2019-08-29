<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Installation Configuration
    |--------------------------------------------------------------------------
    |
    | This file reads mostly from the .env file. Please refer to that file for
    | for most configuration values
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Administrator Account
    |--------------------------------------------------------------------------
    */

    'admin_name' => env('ADMIN_NAME'),
    'admin_username' => env('ADMIN_USERNAME'),
    'admin_email' => env('ADMIN_EMAIL'),
    'admin_password' => env('ADMIN_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | OS
    |--------------------------------------------------------------------------
    */
    'os' => env('OS'),
];
