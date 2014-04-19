<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply a storm id");
}

head("POST: Storms/Close");

$id = $_GET["id"];

  delete("storms/{$id}/close");

foot();
