<?php
session_start();

include 'connection.php';
if(isset($_POST['delete'])){

$qur1=mysql_query("select * from chatbox where frndId= '".$_SESSION['user']."' ");   
$row1=mysql_fetch_array($qur1);


$uId1       =$_SESSION['user'];
$sId1       =$row1['userid'];

$qur2= mysql_query("delete from chatbox where frndId ='".$_SESSION['user']."' and userid='$sId1'" );
 if($qur1)
          header('location:inbox.php');
              
  else{
         
          header('location:error.php'); 
          }

}
?>
