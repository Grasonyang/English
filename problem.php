<?php
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-ui.js"></script>
  <title>登入系統</title>
</head>
<style>
  form{
    margin:auto;
    text-align:center;
  }
  body{
    color:white;
    background-color:black;
  }
  .but{
    height:40px;
    width:150px;
    font-size:25px;
    background-color:white;
    color:black;
  }
  .bac{
    background-color:white;
    color:black;
  }
</style>
<body align="cneter">
  <div style="text-align:center;">
    <button class="but" onclick="location.href='qusnumber.php'">命題</button>
    <button class="but" onclick="location.href='choose.php'">選題</button>
    <button class="but" onclick="location.href='looktest.php'">觀看考卷</button>
    <button class="but" onclick="location.href='lookword.php'">看單字</button>
  </div>
  <br>
  <div style="text-align:center;">
    <button class="bac" onclick="location.href='index.php'">Back</button>
  </div>
  
</body>
</html>
