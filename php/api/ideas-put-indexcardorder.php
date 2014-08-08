<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to update the order an index card's ideas");
}

head("GET: Ideas/Index Card Order");

$id = $_GET["id"];

$data = array();

/*
//Action - Set the full order
$data["action"] = "explicit";
$data["ideas"] = array();
*/

/*
//Action - Insert id's at a specific position of the order
$data["action"] = "position";
$data["start"] = 2; //0 is the first position in the list
$data["ideas"] = array();
*/

/*
//Action - Default - Append the id's to the end of the order
$data["action"] = "append";
$data["ideas"] = array();
*/

put("ideas/".$id."/indexcardorder", $data);

foot();