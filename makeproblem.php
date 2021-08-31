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
  body{
    color:white;
    background-color:black;
    margin: 0px;
  }
  .top {
    background-color: white;
    height:1500px;
  }
  .bottom {
    background-color: black;
    padding: 6px;
    position: absolute;
    left: 0px;
    right: 0px;
    bottom: 0px;
    top: 1500px; 
  }
  .hide-top .top {
    display: none;
  }
  .hide-top .bottom {
    top: 0px;ㄎ
  }
</style>
<body align="cneter">
  <div class='top'>
    <table border="1" style="color:black">
      <tr>
        <td style="font-size:25px;width:750px;">問題</td>
        <td style="font-size:25px;width:400px;">答案</td>
      </tr>
      <?php
        $arr=mysqli_query($db,"SELECT * FROM `問題` WHERE `卷號` LIKE '$_GET[call]'");
        while($row=mysqli_fetch_array($arr)){
          echo "
            <tr>
              <td style=\"font-size:25px;\">$row[1]</td>
              <td style=\"font-size:25px;\">$row[2]</td>
            </tr>
          ";
        }
      ?>
    </table>
  </div>
  <div class='bottom'>
    <button onclick="code()" style="height:40px;width:150px;font-size:20px;">觀看題目</button><br><br>
    <form action="sendout.php?call=<?php echo $_GET["call"] ?>" method="POST">
      <table style="text-align:center">
        <tr>
          <td>
            <span style="color:white;font-size:50px;">問題:</span>
          </td>
          <td><input type="text" autocomplete="off" style="height:40px; width:1500px;font-size:35px;" name="question"></td>
        </tr>
        <tr>
          <td>
            <span style="color:white;font-size:50px;">答案:</span>
          </td>
          <td><input type="text" autocomplete="off" style="height:40px; width:1500px;font-size:35px;" name="answer"></td>
        </tr>
        <tr>
          <td><input type="submit" style="height:30px;width:80px;font-size:15px;"></td>
        </tr>
      </table>
    </form>
    <br>
    <button style="height:30px;width:80px;font-size:15px;"><a href="problem.php">結束命題</a></button>
  </div>
  
</body>
<script>
  code();
  function code(){
    $("body").toggleClass("hide-top");
  }
</script>
</html>
