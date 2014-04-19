<?php
global $config;

$config = [];
$config["apiurl"] = "https://api.stormboard.com/"; //requires trailing slash
$config["testkey"] = "{APIKEY}";

include "layout.php";
include "curl.php";

