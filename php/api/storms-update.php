<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id for a storm");
}

$id = $_GET["id"];

head("PUT: Storms/Update");

  $storm = array();
  $storm["title"] = "Edited API Unit Test Storm - ".time();
  $storm["description"] = "API description ".time();
  $storm["avatars"] = 1;
  $storm["ideacreator"] = 1;

  put("storms/".$id, $storm);

foot();