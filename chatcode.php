<?php
session_start();
include 'connection.php';
if(isset($_POST['sub']))
{
    
$qur1=mysql_query("select * from reg where userid='".$_SESSION['user']."' ");
$row1=mysql_fetch_array($qur1);


$sendmsz1         =$_POST['sendmsz'];
$userid1          =$_SESSION['user'];
$uFirst1          =$row1['first'];
$frnd1            =$_POST['friends'];
$qur2=mysql_query("select * from reg  where first='$frnd1'");
$row2=mysql_fetch_array($qur2);
$frndId1           =$row2['userid'];

$qur3=mysql_query("insert into chatbox values('$userid1','$uFirst1','$frndId1','$frnd1','$sendmsz1')");


if($qur3){
    header('location:chatbox.php');
}
else{
  
    header('location:error.php');
}
}
?>
