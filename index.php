<?php
require "autoload.php";
spl_autoload_register("autoload");

echo Config::getVersion();