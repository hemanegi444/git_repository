<?php

session_start();
include 'connection.php';
if(isset($_POST['req']))
{
$qur1=mysql_query("select * from reg where first='".$_SESSION['qur']."' ");
$row1=mysql_fetch_array($qur1);

$qur2=mysql_query("select * from reg where userid='".$_SESSION['user']."' ");
$row2=mysql_fetch_array($qur2);

$sender1    =$_SESSION['user'];
$reciever1  =$_SESSION['qur'];
$rId1       =$row1['userid'];
$sFirst1     =$row2['first'];



   $qur3=mysql_query("insert into request values('$sender1','$reciever1','$rId1','$sFirst1')");
   if($qur3){
    header('location:friendprofile.php');
    echo $_SESSION['qur'];
   }
    else{
          header('location:error.php'); 
    }
}
  
  


   
?>
