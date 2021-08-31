<?php
  include "connect.php";
  mysqli_query($db,"DELETE FROM `已選擇`");
  mysqli_query($db,"UPDATE `問題` SET `yesorno`='0'");
  if(!empty($_POST)){
    if($_POST['account']=="admin" && $_POST['pwd']=="admin1234"){
      
      header("location:problem.php");
    }else{
      // if(mysqli_query($db,"SELECT * FROM `user` WHERE `account` LIKE $_POST[account] AND `pwd` LIKE $_POST[pwd]")){
        header("location:answer.php");
      // }
    }
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
  text{

  }
</style>
<body align="cneter">
  <h1 style="text-align:center">單字測驗系統</h1>
  <form action="index.php" method="POST">
    <input type="text" class="text" autocomplete="off" style="height:30px;width:250px;font-size:20px;" placeholder="帳號" name="account"><br><br>
    <input type="text" class="text" autocomplete="off" style="height:30px;width:250px;font-size:20px;" placeholder="密碼" name="pwd"><br><br>
    <input type="submit" value="登入" style="height:35px;width:54px;background-color:white;color:black;
                                                                                      font-size:20px;">
  </form>
</body>
</html>
