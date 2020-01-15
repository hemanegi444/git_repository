<?
session_start();
include 'connection.php';
if(isset($_POST['sub2']))
{


       header("location:changepasswd.php");
         }
else{
    echo "Something going Wrong!!";
}

?>