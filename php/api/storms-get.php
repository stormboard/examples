<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to get the storm detail");
}

head("GET: Storm Detail");

$id = $_GET["id"];

get("storms/".$id);

foot();