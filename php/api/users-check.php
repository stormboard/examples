<?php
require "bootstrap.php";

head("POST: Users/Check");

post("users/check", array("username" => "michael", "email" => "michael@stormboard.com"));

foot();