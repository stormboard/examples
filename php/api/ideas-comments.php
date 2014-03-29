<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to update");
}

head("GET: Ideas/Comments List");

$id = $_GET["id"];

get("ideas/".$id."/comments");

foot();