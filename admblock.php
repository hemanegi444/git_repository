

<?php
session_start();

include "connection.php";
if(isset($_POST['block'])){
$blockId=$_POST['b'];
$qur1=mysql_query("select * from reg where userid='$blockId' ");
$row1=mysql_fetch_array($qur1);
$first1     =$row1["first"];
$last1      =$row1["last"];
$userid1    =$row1["userid"];
$password1  =$row1["password"];
$confirm1   =$row1["confirm"];
$birth1     =$row1["birth"];
$gender1    =$row1["gender"];
$question1  =$row1['question'];
$answer1    =$row1['answer'];
$address1   =$row1["address"];
$mobile1    =$row1["mobile"];

$qur2= mysql_query("insert into areg values('$first1','$last1 ','$userid1 ','$password1' ,'$confirm1 ','$birth1','$gender1 ','$question1','$answer1','$address1','$mobile1')"); 


 if($qur2){

$qur3=mysql_query("delete from reg where userid='$userid1' and password= '$password1' ");
header('location:admhome.php');
           }   
  else{
      
          header('location:error.php'); 
          }

if($qur3){
mysql_query("delete from login where userid='$userid1' and password= '$password1' ");
header('location:admhome.php');
           }   
  else{
      
          header('location:error.php'); 
          }

    
}

if(isset($_POST['unblock'])){
$unblockId=$_POST['c'];
$qur1=mysql_query("select * from areg where userid='$unblockId' ");
$row1=mysql_fetch_array($qur1);
$first1     =$row1["first"];
$last1      =$row1["last"];
$userid1    =$row1["userid"];
$password1  =$row1["password"];
$confirm1   =$row1["confirm"];
$birth1     =$row1["birth"];
$gender1    =$row1["gender"];
$question1  =$row1['question'];
$answer1    =$row1['answer'];
$address1   =$row1["address"];
$mobile1    =$row1["mobile"];

$qur2= mysql_query("insert into reg values('$first1','$last1 ','$userid1 ','$password1' ,'$confirm1 ','$birth1','$gender1 ','$question1','$answer1','$address1','$mobile1')"); 


 if($qur2){


$qur3=mysql_query("delete from areg where userid='$userid1' and password= '$password1' ");
header('location:admhome.php');
           }   
 

if($qur3){
mysql_query("insert into login values('$userid1' , '$password1')");
header('location:admhome.php');
           }   
 

    
}
?>
