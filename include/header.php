<?php
$MyHostname = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo "$SiteTitle | $MyHostname "; ?></title>
    <link rel='stylesheet' href='css/style.css'>
  </head>
<body>
  <div id='head'>
      <?php
      if(file_exists("images/logo.png") == true){
        echo "
        <div id='headleftimg'>
        <a href='index.php'><img src='images/logo.png' alt='Logo' title='Homepage'></a>
        </div>";
      }
      else {
        echo "
        <div id='headlefttext'>
        <a href='index.php'>Maintenance</a>
        </div>";
      }
      ?>
    <div id='headright'>
    <a href='index.php'><?php echo $_SERVER['HTTP_HOST']; ?></a>
    </div>
  </div>
<div id='splash'>
  <hr>
