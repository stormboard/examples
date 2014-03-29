<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply an id to delete");
}

head("DELETE: Ideas");

  $id = $_GET["id"];
  delete("ideas/".$id);

foot();
