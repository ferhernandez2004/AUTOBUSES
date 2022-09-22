<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    //Conexion con firebase (Realtime Database)
    'firebase' => [
     'apikey' => env('FIREBASE_API_KEY'),
     'authDomain' =>  env('FIREBASE_AUTH_DOMAIN'),
     'projectId' =>  env('FIREBASE_PROJECT_ID'),
     'storageBucket' =>  env('FIREBASE_STORAGE_BUCKET'),
     'messagingSenderId' =>  env('FIREBASE_MESSAGING_SENDER_ID'),
     'appId' =>  env('FIREBASE_APP_ID'),
     'measurementId' =>  env('FIREBASE_MEASUREMENT_ID'),
    ],

    //Conexion con firebase (Realtime Database)
   // 'firebase' => [
  //   'api_key' => 'AIzaSyAIK0_bRT-dsJZpYiaLmaAikgwQ3YOLPbE',
 //    'auth_domain' => 'larafirebase-b4879.firebaseapp.com',
 //  'database_url' => 'larafirebase-b4879.appspot.com',
 //  'project_id' => 'larafirebase-b4879',
 //  'storage_bucket' => 'larafirebase-b4879.appspot.com',
 //   'messaging_sender_id' => '791447942330',
 //   'app_id' => '1:791447942330:web:1fa081ee4d739740a93e83',
 //  'measurement_id' => 'G-HR2RJL11HF',
 //  ],

       

];
