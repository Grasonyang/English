<?php
  include "connect.php";
  mysqli_query($db,"UPDATE `問題` SET `yesorno`='0'");
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
  <table border="1" style="color:white">
    <tr>
      <td style="font-size:25px;width:200px;">卷號</td>
      <td style="font-size:25px;width:750px;">問題</td>
      <td style="font-size:25px;width:400px;">答案</td>
    </tr>
    <?php
      $arr=mysqli_query($db,"SELECT * FROM `問題`");
      while($row=mysqli_fetch_array($arr)){
        echo "
          <tr>
            <td style=\"font-size:25px;\">$row[4]</td>
            <td style=\"font-size:25px;\">$row[1]</td>
            <td style=\"font-size:25px;\">$row[2]</td>
          </tr>
        ";
      }
    ?>
  </table><br>
  <button onclick="location.href='choosenproblem.php'">選擇題目</button>
  <button onclick="location.href='looktest.php'">觀看題目</button>
  <button onclick="location.href='problem.php'">BACK</button>
</body>
</html>
