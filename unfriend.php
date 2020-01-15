<?php
session_start();

include 'connection.php';
if(isset($_POST['unfriend'])){

$qur1=mysql_query("select * from accept where uId= '".$_SESSION['user']."' ");   
$row1=mysql_fetch_array($qur1);
$_SESSION['qur']=$row1['sId'];

$uId1       =$_SESSION['user'];
$sId1       =$_SESSION['qur'];

$qur2=mysql_query("insert into unfriend values('$uId1','$sId1')");
 if($qur2){
mysql_query("delete from accept where uId='$uId1' and sId= '$sId1' ");
 
          header('location:friendlist.php');
           }   
  else{
          unset($_SESSION['qur']);
          header('location:error.php'); 
          }

}

if(isset($_POST['unfriend2']))
    {
$qur1=mysql_query("select * from accept where sId= '".$_SESSION['user']."' ");   
$row1=mysql_fetch_array($qur1);
$_SESSION['qur']=$row1['uId'];

$uId1       =$_SESSION['user'];
$sId1       =$_SESSION['qur'];

$qur2=mysql_query("insert into unfriend2 values('$uId1','$sId1')");
 if($qur2){
mysql_query("delete from accept where sId='".$_SESSION['user']."' and uId= '".$_SESSION['qur']."' ");
 
          header('location:friendlist.php');
           }   
  else{
          unset($_SESSION['qur']);
          header('location:error.php'); 
          }
    }
?>
