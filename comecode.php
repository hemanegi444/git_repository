
<?php
session_start();

include 'connection.php';
if(isset($_POST['sub'])){
$u1    =$_POST["userid"];
$p1    =$_POST["pass"];
$q1    =$_POST["ques"];
$a1    =$_POST["ans"];
$que=mysql_query("select * from reg where userid='$u1' and password='$p1' and question='$q1' and answer='$a1' ") ;
if(mysql_num_rows ($que)>0){

$qur1=mysql_query("insert into login values('$u1','$p1')");
$row1=mysql_fetch_array('$qur1');

if($qur1){
    mysql_query("delete from dlogin where  userid='$u1' and password= '$p1' ");
    header('location:comemsz.php');
   }
    else{
        
         
          header('location:error1.php'); 
    }
}


    else
{
 echo "information not match plz try again";
   header('location:comeback.php'); 
}
    }
    
    
?>
  