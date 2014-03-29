<?php
require "bootstrap.php";

head("PUT: Users/Profile");

  $user = array();
  $user["lastname"] = time();

  put("users/profile", $user);

foot();