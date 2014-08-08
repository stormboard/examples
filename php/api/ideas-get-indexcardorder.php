<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to get an idea");
}

head("GET: Ideas/Index Card Order");

$id = $_GET["id"];

get("ideas/".$id."/indexcardorder");

foot();