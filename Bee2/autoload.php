<?php namespace Bee2;
require_once "Logger.php";

function autoload($object) {
    $path = str_replace("\\", "/", $object);
    echo "\n<br />/Object: $object => Path: $path /";
    Logger::log("Object: $object => Path: $path");

    require_once("$path.php");
}