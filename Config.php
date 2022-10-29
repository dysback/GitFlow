<?php

require("Version.php");

abstract class Config {
    private static Version $version;

    public static function getVersion() {
        if(!isset(static::$version)) {
            static::$version = new Version();
        }
        return static::$version;
    }


    public function __get($name){
        switch($name) {
            case "version":
                if(!Config::$version)
                {
                    $version = new Version(0, 3, 6);
                }
                
                return $version;
            break;
            
            default:
        }
    }

}