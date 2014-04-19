<?php
require "bootstrap.php";

if(!isset($_GET["id"])){
  die("you must supply a storm id");
}

head("POST: Storms/Invite");

$id = $_GET["id"];

$invite = [];
$invite["participants"] = ["ronald@mcdonalds.com", "yoda@jedicouncil.com"];

  post("storms/{$id}/invite", $invite);

foot();
