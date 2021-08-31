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
  <table border="1" style="color:white">
    <tr>
      <td style="font-size:25px;width:200px;">卷號</td>
      <td style="font-size:25px;width:750px;">問題</td>
      <td style="font-size:25px;width:400px;">答案</td>
    </tr>
    <?php
      $row=mysqli_query($db,"SELECT * FROM `已選擇`");
      while($arr=mysqli_fetch_array($row)){
        $pro=mysqli_query($db,"SELECT * FROM `問題` WHERE `yesorno` LIKE '0' AND `卷號` LIKE '$arr[1]' ORDER BY RAND() LIMIT $arr[2]");
        while($problem=mysqli_fetch_array($pro)){
          mysqli_query($db,"UPDATE `問題` SET `yesorno`='1' WHERE `question`='$problem[question]'");
          echo "
            <tr>
              <td>$problem[4]</td>
              <td>$problem[1]</td>
              <td>$problem[2]</td>
            </tr>
          ";
        }
      }
    ?>
  </table><br>
</body>
</html>
