<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply a storm id");
}

head("GET: Storms/Ideas");

$id = $_GET["id"];

//Standard Storm Idea GET Request
get("storms/{$id}/ideas");

//Filter by Greater Than Last Modified Date
//get("storms/{$id}/ideas?lastModifiedMin=".urlencode("2014-05-10T00:00:00-00:00"));


foot();
