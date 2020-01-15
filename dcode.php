h<?
session_start();

include 'connection.php';
if(isset($_POST['sub1']))
{

   $qur1=mysql_query("select *from login where userid='".$_SESSION['user']."' ");
   $row1=mysql_fetch_array($qur1);
   $userid1=$row1['userid'];
   $password1=$row1['password'];
   
   $qur2= mysql_query("insert into dlogin values('$userid1','$password1')");
if($qur2){
   mysql_query("delete from login where userid='$userid1' and password= '$password1' ");
    
 header('location:dyesmsz.php'); 
           }   
  else{
      
          header('location:error.php'); 
          }
}

if(isset($_POST['sub2']))
{


       header("location:setting.php");
         }
?>