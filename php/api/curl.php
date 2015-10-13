<?php
function get($path){
  global $config;

  $header = array();
  $header[] = 'X-API-Key:'.$config["testkey"];

  //Use this for basic auth instead of API Key auth
  //$header[] = 'Authentication: Basic '.base64_encode($config['username'].':'.$config['password']);

  $url = $config["apiurl"].$path;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec ($ch);
  $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  curl_close ($ch);

  echo "<h3>Request</h3>";
  echo "<dl class='dl-horizontal'>";
  echo "<dt>API URL:</dt><dd>".$url."</dd>";
  echo "<dt>Method:</dt><dd>GET</dd>";
  echo "</dl>";

  output($http_status, $response);
}

function post($path, $vars){

  global $config;

  $header = array();
  $header[] = 'X-API-Key:'.$config["testkey"];
  $header[] = "Content-type: application/json";

  $url = $config["apiurl"].$path;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($vars));

  $response = curl_exec ($ch);

  $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  curl_close ($ch);

  echo "<h3>Request</h3>";
  echo "<dl class='dl-horizontal'>";
  echo "<dt>API URL:</dt><dd>".$url."</dd>";
  echo "<dt>Method:</dt><dd>POST</dd>";
  echo "<dt>POST vars:</dt><dd><pre>"; echo print_r($vars); echo "</pre></dd>";
  echo "</dl>";

  output($http_status, $response);
}

function put($path, $vars){

  global $config;

  $header = array();
  $header[] = 'X-API-Key:'.$config["testkey"];
  $header[] = "Content-type: application/json";

  $url = $config["apiurl"].$path;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($vars));

  $response = curl_exec ($ch);

  $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  curl_close ($ch);

  echo "<h3>Request</h3>";
  echo "<dl class='dl-horizontal'>";
  echo "<dt>API URL:</dt><dd>".$url."</dd>";
  echo "<dt>Method:</dt><dd>PUT</dd>";
  echo "<dt>PUT vars:</dt><dd><pre>".print_r($vars)."</pre></dd>";
  echo "</dl>";

  output($http_status, $response);
}

function delete($path){

  global $config;

  $header = array();
  $header[] = 'X-API-Key:'.$config["testkey"];

  $url = $config["apiurl"].$path;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec ($ch);

  $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  curl_close ($ch);

  echo "<h3>Request</h3>";
  echo "<dl class='dl-horizontal'>";
  echo "<dt>API URL:</dt><dd>".$url."</dd>";
  echo "<dt>Method:</dt><dd>DELETE</dd>";
  echo "</dl>";

  output($http_status, $response);
}