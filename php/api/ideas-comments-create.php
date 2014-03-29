<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an idea id");
}

head("POST: Ideas/Create Comment");

$id = $_GET["id"];

$comment = [];
$comment["comment"] = "Here is some comment @ ".date("c");

post("ideas/".$id."/comments/", $comment);

foot();
