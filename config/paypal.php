<?php

return array(
    // set your paypal credential
    'client_id' => 'ARCBUFeF-5alg8OnMZ3cNR_mgdzXX0440BX2reyzNbFqbvTw0txL0tUCg7BCjodho32tfZ26qURNPgl5',
    'secret' => 'EEa5kfuQWOTAgRl-87Y0Awsr_X70U8lfTZNiJerGd4VgfVrzJLxzd9K2MH0sXxb3yeMli2AFIQXTdCK9',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);

