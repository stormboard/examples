<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply a storm id");
}

head("POST: Storms/Invite");

$id = $_GET["id"];

$invite = [];
#$invite["participants"] = ["ronald@mcdonalds.com", "yoda@jedicouncil.com"];
$invite["participants"] = ["mdbollman+api1@gmail.com", "mdbollman+api2@gmail.com", "mdbollman+api3.gmail.com"];

  post("storms/{$id}/invite", $invite);

foot();
