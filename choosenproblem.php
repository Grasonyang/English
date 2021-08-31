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
    margin: 0px;
  }
</style>
<body align="cneter">
  <?php
    $arr=mysqli_query($db,"SELECT * FROM `卷號`");
    while($row=mysqli_fetch_array($arr)){
      echo "<button style=\"height:30px;width:80px;font-size:15px;\" onclick=\"location.href='getproblem.php?call=$row[1]'\">$row[1]</button>";
    }
  ?><br>
  <button style="height:30px;width:80px;font-size:15px;" onclick="location.href='choose.php'">BACK</button>
</body>
</html>
