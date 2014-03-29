<?php
require "bootstrap.php";

head("POST: Users/Create");

  $time = time();
  $user = array();
  $user["firstname"] = "MichaelUT";
  $user["lastname"] = $time;
  $user["username"] = "mdbut".$time;
  $user["email"] = "mdbollman+ut".$time."@gmail.com";
  $user["password"] = $time;

  post("users/", $user);

foot();