<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an idea id");
}

head("DELETE: Ideas/Vote");

$id = $_GET["id"];

delete("ideas/".$id."/vote/", array());

foot();