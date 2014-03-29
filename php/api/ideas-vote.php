<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an idea id");
}

head("POST: Ideas/Vote");

$id = $_GET["id"];

post("ideas/".$id."/vote/", array());

foot();