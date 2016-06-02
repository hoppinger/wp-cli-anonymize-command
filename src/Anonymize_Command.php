<?php

// namespace WP_CLI_Anonymize;

// use WP_CLI;

class Anonymize_Command extends WP_CLI_Command {

    public function __construct()
    {

    }

    public function test($args, $assoc_args){
         if(empty($args)) {
            WP_CLI::error( "Test ");
            exit;
        }
    }
}