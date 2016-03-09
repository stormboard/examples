<?php
require "bootstrap.php";

if(empty($_GET["idea_id"]) || empty($_GET["comment_id"])){
  die("you must supply an idea_id and comment_id");
}

head("DELETE: Ideas/Edit Comment");

$idea_id = $_GET["idea_id"];
$comment_id = $_GET["comment_id"];

delete("ideas/".$idea_id."/comments/".$comment_id);

foot();
