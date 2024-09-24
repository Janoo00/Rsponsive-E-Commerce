<?php
$a=$_POST["user"];
$b=$_POST["pass"];

include("../dbconnect.php");

$res=mysqli_query($con, "select * from user_info where uname='$a' and password='$b'");
 if(mysqli_num_rows($res)>0){
    if([$res]=="user"){
      header("location:login.php?status=0");
    }else{
      header("location:login.php?status=1");
    }
 }else{
    header("location:login.php?status=2");
 }
?>