<?php
  session_start();
  $db=mysqli_connect("127.0.0.1","admin","1234","單字") or die('資料庫連接失敗');
  mysqli_query($db,"SET NAMES UTF8");
?>