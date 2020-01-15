<?
session_start();
include 'connection.php';

if(isset($_POST['accept'])){
$qur1=mysql_query("select * from reg where userid='".$_SESSION['user']."' ");
$row1=mysql_fetch_array($qur1);
$qur2=mysql_query("select * from request where rId='".$_SESSION['user']."' ");
$row2=mysql_fetch_array($qur2);
$_SESSION['qur']=$row2['sender'];
$_SESSION['qurF']=$row2['sFirst'];

$uId1       =$_SESSION['user'];
$uFirst1    =$row1['first'];
$sId1       =$_SESSION['qur'];
$sFirst1    =$_SESSION['qurF'];
   $qur3=mysql_query("insert into accept values('$uId1','$uFirst1','$sId1','$sFirst1')");
   if($qur3){
        mysql_query("delete from request where  rId='".$_SESSION['user']."' and sender= '".$_SESSION['qur']."' ");
    header('location:friendrequest.php');
   }
    else{
           unset($_SESSION['qur']);
          header('location:error.php'); 
    }

    
}
?>