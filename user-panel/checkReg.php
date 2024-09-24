<?php
$a=$_POST["name1"];
$b=$_POST["name2"];
$c=$_POST["user"];
$d=$_POST["pass"];
$e=$_POST["email"];
$f=$_POST["contact"];

include("../dbconnect.php");

// insert data into datatbase
$res=mysqli_query($con,"insert into user_info(fname,lname,uname,password,email,contact,date)
values('$a','$b','$c','$d','$e','$f',now())");

if($res){
    header("location:newReg.php?status=0");
}else{
    header("location:newReg.php?status=1");
}



?>