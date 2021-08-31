<?php
  include "connect.php";
  if(!empty($_POST)){
    if(mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `卷號` WHERE `考卷` LIKE '$_POST[ansnumber]'"))){

    }else{
      mysqli_query($db,"INSERT INTO `卷號`(`考卷`) VALUES ('$_POST[ansnumber]')");
    }
    header("location:makeproblem.php?call=$_POST[ansnumber]");
  }
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
  #ddd{
    height:40px;
    width:200px;
    font-size:30px;
  }
  text{

  }
</style>
<body align="cneter">
  <h1 style="text-align:center">輸入卷號</h1>
  <form action="qusnumber.php" method="POST">
    <input type="text" id="ddd" name="ansnumber" autocomplete="off" placeholder="卷號" ><br><br>
    <input type="submit">
  </form>
  <div style="text-align:center"><button style="height:30px;width:80px;font-size:15px;"><a href="problem.php">返回</a></button></div>
</body>
</html>
