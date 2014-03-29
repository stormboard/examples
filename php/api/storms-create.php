<?php
require "bootstrap.php";

head("POST: Storms/Create");

$storm = array();
$storm["title"] = "API Unit Test Storm - ".time();
$storm["description"] = "API description ".time();
$storm["avatars"] = 1;
$storm["ideacreator"] = 1;

post("storms/", $storm);

foot();