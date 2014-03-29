<?php
require "bootstrap.php";

head("GET: Templates/List");

$id = "";
if(isset($_GET["id"])){
  $id = "/".(int)$_GET["id"];
}

get("templates/list".$id);

foot();
