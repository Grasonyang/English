<?php
  include "connect.php";
  if(!empty($_POST)){
    
    $_POST['question']=str_replace($_POST['answer'],"_____",$_POST['question']);
    $aa=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `問題` WHERE `卷號` LIKE '$_GET[call]'"));
    $aa+=1;
    mysqli_query($db,"INSERT INTO `問題`(`question`, `answer`, `題號`, `卷號`) VALUES 
    ('$_POST[question]','$_POST[answer]','$aa','$_GET[call]')");
    mysqli_query($db,"UPDATE `問題` SET `yesorno`='0'");
    
  }
  header("location:makeproblem.php?call=$_GET[call]");
?>