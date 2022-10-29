<?php

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
            
            default:
        }
    }
}