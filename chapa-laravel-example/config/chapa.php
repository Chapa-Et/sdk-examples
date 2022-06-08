<?php

/*
 * This file is part of the Laravel Rave package.
 *
 * Kidus Yared - @kidus363 <kidusy@chapa.co>
 *
 * 
 */
return [

    /**
     * Public Key: Your Chapa publicKey. Sign up on https://dashboard.chapa.co/ to get one from your settings page
     *
     */
    'publicKey' => env('CHAPA_PUBLIC_KEY'),

    /**
     * Secret Key: Your chapa secretKey. Sign up on https://dashboard.chapa.co/ to get one from your settings page
     *
     */
    'secretKey' => env('CHAPA_SECRET_KEY'),

    /**
     * Secret for webhook
     *
     */
    'secretKey' => env('CHAPA_WEBHOOK_SECRET')
    
];