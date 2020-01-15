

<?php

include 'connection.php';

$first1     =$_POST["first"];
$last1      =$_POST["last"];
$userid1    =$_POST["userid"];
$pass1      =$_POST["pass"];
$cpass1     =$_POST["cpass"];
$dd         =$_POST["dd"];
$mm         =$_POST["mm"];
$yy         =$_POST["yy"];
$gen1       =$_POST["gen"];
$question1  =$_POST['question'];
$answer1    =$_POST['answer'];
$add1       =$_POST["add"];
$mob1       =$_POST["mob"];



$qur1=mysql_query("insert into greg values('$first1','$last1','$userid1','$pass1','$cpass1','$dd-$mm-$yy','$gen1','$question1','$answer1','$add1',$mob1)");

if($qur1>0){
   $qur2=mysql_query("insert into glogin values('$userid1','$pass1' )");
  
    
    header('location:gmaillogin.php');
    
          }
    else{

    $_SESSION['err']="user already exists";
    header('location:greg.php');
   }

if($qur2){
   $qur3=mysql_query("insert into gmail_id values('$userid1')");
       
}
?>
