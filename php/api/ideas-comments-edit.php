<?php
require "bootstrap.php";

if(empty($_GET["idea_id"]) || empty($_GET["comment_id"])){
  die("you must supply an idea_id and comment_id");
}

head("PUT: Ideas/Edit Comment");

$idea_id = $_GET["idea_id"];
$comment_id = $_GET["comment_id"];

$comment = [];
$comment["comment"] = "Here is an updated comment @ ".date("c");

put("ideas/".$idea_id."/comments/".$comment_id, $comment);

foot();
