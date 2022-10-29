<?php namespace Bee2;

class Logger {
    static function log($obj) {
        $date = date("Y-m-d");
        $time = date("H:i:s");
        file_put_contents("logs/$date.txt", 
                            "$time " .
                            __FILE__ . " " .
                            __LINE__ . " " .
                            "$obj\n" , FILE_APPEND | LOCK_EX);
    }
}