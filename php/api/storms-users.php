<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id for a storm");
}

$id = $_GET["id"];

head("GET: Storms/Users");

  get("storms/users/".$id);

foot();
