<?php
  include "connect.php";
  if(!empty($_POST)){
    $aaa=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `已選擇` WHERE `卷號` LIKE '$_GET[call]'"));
    mysqli_query($db,"DELETE FROM `已選擇` WHERE `卷號` LIKE '$_GET[call]'");
    $aaa[2]=$aaa[2]+$_POST['ansnumber'];
    $num=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `問題` WHERE `卷號` LIKE '$_GET[call]'"));
    if($aaa[2]>$num){
      $aaa[2]=$num;
    }
    mysqli_query($db,"INSERT INTO `已選擇`(`卷號`, `多少題`) VALUES ('$_GET[call]','$aaa[2]')");
    header("location:choosenproblem.php");
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
    margin: 0px;
  }
</style>
<body align="cneter">
  <form action="getproblem.php?call=<?php echo $_GET['call'] ?>" method="POST">
    <input type="number" id="ddd" name="ansnumber" autocomplete="off" placeholder="多少題" ><br><br>
    <input type="submit">
  </form>
</body>
</html>
