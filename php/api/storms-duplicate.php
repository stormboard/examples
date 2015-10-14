<?php
require "bootstrap.php";

if(!isset($_GET["id"]) || !isset($_GET["stormname"])){
  die("you must supply an id and stormname to duplicate a storm");
}

head("POST: Duplicate a Storm");

$stormname = $_GET["stormname"];
$id = $_GET["id"];

post("storms/".$id."/duplicate", [
  'stormname' => $stormname
]);

foot();