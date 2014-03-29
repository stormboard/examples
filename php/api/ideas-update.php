<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to update");
}

head("PUT: Ideas");

  $id = $_GET["id"];

  $data = array();
  $data["data"] = "Updated Idea: ".time();
  $data["x"] = rand(100, 1000);
  $data["y"] = rand(100, 1000);
  $data["lock"] = 0;

put("ideas/".$id, $data);

foot();