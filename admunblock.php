

<?php
session_start();

include "connection.php";
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

 mysql_query("insert into dlogin values('$userid1 ','$password1' ,'$confirm1 ','$birth1','$gender1 ','$question1','$answer1','$address1','$mobile1')"); 




    
}
?>
