<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to update");
}

head("GET: Ideas");

$id = $_GET["id"];

get("ideas/".$id, $data);

foot();