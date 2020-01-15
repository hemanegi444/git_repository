


<?

include 'connection.php';
if(isset($_POST['sub1']))
{
   $qur1=mysql_query("select *from ginbox where frndid='".$_POST['userid1']."' and sendmsz='".$_POST['old1']."' ");

  if($qur1){
  $u =$_POST['userid1'];
  
   $qur1=mysql_query("select *from reg where userid='$u' ");
   $qur2= mysql_query("update reg set password='".$_POST['new1']."' ,confirm='".$_POST['new1']."' where userid='$u' ");
if($qur2){
   mysql_query("update login set password='".$_POST['new1']."'  where userid='$u' ");
    
       header("location:changepwdmsz.php");
         }
else{
    echo "Something going Wrong!!";
}
}}

if(isset($_POST['sub2']))
{
 header("location:changepwdmsz.php");
         }


?>

