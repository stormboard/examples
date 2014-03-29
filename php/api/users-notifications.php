<?php
require "bootstrap.php";

head("PUT: Users/Notifications");

  $notify["dailyemail"] = 1;
  $notify["newsletter"] = 0;
  $notify["newstormuser"] = 1;

  put("users/notifications", $notify);

foot();