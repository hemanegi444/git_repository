<?session_start();


include 'connection.php';
if(isset($_POST['sub'])){
$que=mysql_query("select * from reg where userid='".$_POST['userid']."' and question='".$_POST['fquestion']."' and answer='".$_POST['fanswer']."' ")or die('unable to execute');

if(mysql_num_rows ($que)>0){
$qur=mysql_query("select * from reg where userid='".$_POST['userid']."' " )or die('unable to execute');
$row=mysql_fetch_array($qur);
$a=$row['pass'];
$_SESSION['pass']=$a;

     
 header('location:fpass.php');

}
else
{
 $_SESSION['err']="wrong ans";
    header('location:fpass.php');

}
}
?>
