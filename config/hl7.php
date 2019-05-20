<?php

return [

    /*
     * If set to false, no activities will be saved to the database.
     */
    'enabled' => env('HL7_ENABLED', true),

    /*
     * By default all the activities will be logged to file
     * it can be file or servers
     * server/log/database/hybrid
     */
    
    'logging_mode' => env('HL7_LOGGING_MODE', 'log'),

    /*
     * When the clean-command is executed, all recording activities older than
     * the number of days specified here will be deleted.
     */
    'server_ip' => env('HL7_SERVER_IP', 'localhost'),

    'server_port' => env('HL7_SERVER_PORT', 22222),


    /**
     * The sender app name that will be added on the MSH segment field value
     */
    'sender_app' => env('APP_NAME'),

    'sending_facility' => env('HL7_SENDING_FACILITY', 'CPP'),

    /**
     * HL7 processing mode P T or 
     */
    'processing_id' => env('HL7_PROCESSING_ID', 'P'),

    /*
     * How many times retires will be made in case of communication errors
     */
    'max_retries' => 3, //3 times

];
