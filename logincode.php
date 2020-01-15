<?php
session_start();
include 'connection.php';
if(isset($_POST['sub'])){
$userid1 =$_POST["userid"];
$pass1   =$_POST["pass"];


$qur2=mysql_query("select * from login where userid='$userid1' and password='$pass1'");
if(mysql_num_rows ($qur2)>0)
{
    $_SESSION['user']=$userid1;
   header('location:home.php');
}  
    else{

   $_SESSION['err']="user not exists";
   header('location:login.php');
   }
   

   
   }
?>