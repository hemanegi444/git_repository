<?php

session_start();

include 'connection.php';
if(isset($_POST['sub1']))
{
$qur1=mysql_query("select * from reg where userid='".$_SESSION['user']."' ");
$row1=mysql_fetch_array($qur1);
$first1         =$row1['first'];
$work1          =$_POST['work'];
$edu1           =$_POST['edu'];
$relationship1  =$_POST['relationship'];
$rviews1        =$_POST['rviews'];
$mob1           =$_POST['mob'];
$email1         =$_POST['email'];
$quote1         =$_POST['quote'];
$userid1        =$_SESSION['user'];

 
$qur1=mysql_query("update profile set work='$work1', edu='$edu1', relationship='$relationship1', rviews='$rviews1',mob='$mob1' ,email='$email1' , quote='$quote1'   where  userid='$userid1'  ");
if($qur1){
 header("location:profile.php"); 
     } 
else{
header("location:error.php");
}



}
?>