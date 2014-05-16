<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply a storm id");
}

head("GET: Storms/Ideas");

$id = $_GET["id"];

get("storms/{$id}/ideas");

foot();
