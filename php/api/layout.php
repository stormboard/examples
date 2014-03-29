<?php
function head($title){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> - API Unit Tests</title>

  <!-- Bootstrap -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="container">
  <h1><?= $title ?></h1>
<?php
}

function foot(){
?>
</div>
</body>
</html>

<?php
}

function output($http_status, $response){

  echo "<h3>Response</h3>";
  echo "<dl class='dl-horizontal'>";
  echo "<dt>response code:</dt><dd>".$http_status."</dd>";
  echo "<dt>output length:</dt><dd>";
  if(substr($response, 0, 1) == "{"){
    echo strlen($response);
  }else{
    echo count($response);
  }
  echo "</dd>";
  echo "<dt>output:</dt>";
  echo "<dd><pre>".PHP_EOL;
  echo $response;
  echo "</pre></dd>";
  echo "<dt>processed output:</dt>";
  echo "<dd><pre>".PHP_EOL;
  if(substr($response, 0, 1) == "{"){
    print_r(json_decode($response, true));
  }else{
    print_r($response);
  }
  echo "</pre></dd>";
  echo "</dl>";
}
?>