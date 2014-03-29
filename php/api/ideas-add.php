<?php
require "bootstrap.php";

head("POST: Ideas/Create");

  $idea = [];
  $idea["stormid"] = 1720;
  $idea["stormkey"] = "bronze99";
  $idea["x"] = rand(100, 1000);
  $idea["y"] = rand(100, 1500);
  $idea["type"] = "text";
  $idea["color"] = "purple";
  $idea["data"] = "Test Idea @ ".time();

  post("ideas/", $idea);

foot();
