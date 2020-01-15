<?
session_start();
include 'connection.php';
if(isset($_POST['sub1']))
{

   $qur1=mysql_query("select *from reg where userid='".$_SESSION['user']."' ");
   $qur2= mysql_query("update reg set password='".$_POST['new1']."' ,confirm='".$_POST['new1']."' where userid='".$_SESSION['user']."' ");
if($qur2){
   mysql_query("update login set password='".$_POST['new1']."'  where userid='".$_SESSION['user']."' ");
    
       header("location:changepwdmsz.php");
         }
else{
    echo "Something going Wrong!!";
}
}

if(isset($_POST['sub2']))
{
 header("location:setting.php");
         }


?>
