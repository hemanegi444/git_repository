
<?
session_start();
include  "connection.php";

if(isset($_POST['searchinbox'])){
$frnd=$_POST["searchinbox"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:inbox.php');
}
}

if(isset($_POST['searchhome'])){
$frnd=$_POST["searchhome"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:home.php');
}

}

if(isset($_POST['searchprofile'])){
$frnd=$_POST["searchprofile"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:profile.php');
}

}

if(isset($_POST['searchprofile2'])){
$frnd=$_POST["searchprofile2"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:profile2.php');
}

}

if(isset($_POST['searchsetting'])){
$frnd=$_POST["searchsetting"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:setting.php');
}

}

if(isset($_POST['searchfrnds'])){
$frnd=$_POST["searchfrnds"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:friends.php');
}

}

if(isset($_POST['searchfreq'])){
$frnd=$_POST["searchfreq"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:friendrequest.php');
}

}

if(isset($_POST['searchfrndpro'])){
$frnd=$_POST["searchfrndpro"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:friendprofile.php');
}

}

if(isset($_POST['searchfrndlist'])){
$frnd=$_POST["searchfrndlist"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:friendlist.php');
}

}

if(isset($_POST['searchdyes'])){
$frnd=$_POST["searchdyes"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:dyes.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:dyes.php');
}

}

if(isset($_POST['searchdeactive'])){
$frnd=$_POST["searchdeactive"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:deactive.php');
}

}

if(isset($_POST['searchchat'])){
$frnd=$_POST["searchchat"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:chatbox.php');
}

}

if(isset($_POST['searchchange'])){
$frnd=$_POST["searchchange"];
$qur=mysql_query("select * from reg where first='$frnd' ");

if(mysql_num_rows ($qur)>0){
$_SESSION['qur']=$frnd;
header('location:friends.php');
}
else{
    $_SESSION['err']="user not exists";
    unset($_SESSION['qur']);
    header('location:changepasswd.php');
}

}

?>