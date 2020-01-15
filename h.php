
<?
include 'connection.php';
?>

<html>
<head>
<title>SocialNet</title>

  <style type="text/css">
 .td1{  font-size:15px;color:black;}
            .td2{  font-size:15px;color:black;}
          
body {
	margin:0;
	padding:0;
	width:100%;
	color:#959595;
	font:normal 12px/1.8em Arial, Helvetica, sans-serif;
	background:url(images/bg.jpg);
}

.main {
	padding:0;
	margin:0;
	background:url(images/main_bg.jpg) repeat-y center;
}
.logo {
	float:left;
	width:400px;
	height:86px;
	padding:0;
	margin:0 auto;
}
h1 {
	margin:0;
	padding:20px 0 0 0;
	color:#636363;
	font:bold 38px/1.2em Arial, Helvetica, sans-serif;
	letter-spacing:-2px;
}
h1 a, h1 a:hover {
	color:#636363;
	text-decoration:none;
}
h1 span {
	color:#78bbe6;
}
h1 small {
	padding:0 10px;
	font:normal 12px/1.2em Arial, Helvetica, sans-serif;
	letter-spacing:normal;
}
h2 {
	font:normal 24px Arial, Helvetica, sans-serif;
	padding:8px 0;
	margin:0;
	color:#595959;
}
h3{font:normal 24px Arial, Helvetica, sans-serif;
position: absolute;
top:500px;
left:400px;
}

a {
	color:#97c950;
	text-decoration:underline;
}


.main_resize {
	margin:0 auto;
	width:969px;
}
.header {
	margin:0 auto;
	width:923px;
}
.hbg {
	padding:0;
	margin:0 0 10px;
}



.content {
	padding:0;
	margin:0 auto;
	width:923px;
        
}
.mainbar {
	margin-top:50px;
	padding:0;
	float:right;
	width:923px;
        height:500px;
}
.mainbar img {
	padding:4px;
	border:1px solid #f2f2f1;
	background:#FFF;
}

.fbg {
	padding:50px 0;
	background:url(images/fbg_bg.jpg) repeat-y center;
}
.fbg_resize {
	margin:0 auto;
	padding:0;
	width:923px;
}


.footer {
	background:url(images/main_bg.jpg) repeat-y center;
}
.footer_resize {
	margin:0 auto;
	padding:20px 0;
	width:923px;
	color:#9a9a9a;
}

.footer a {
	color:#9a9a9a;
	padding:inherit;
	text-decoration:underline;
}

.footer .lf {
	float:left;
}



.clr {
	clear:both;
	padding:0;
	margin:0;
	width:100%;
	font-size:0;
	line-height:0;
}
.tab{    background:url(images/bg.jpg); height:400px;margin-top:50px;}
#forgetA{position: absolute;
top:250px;
margin-left: 250px;

}
     

</style>
                   

	
	

</head>

 <body>

<div class="main">
  <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small></small></a></h1>

      </div>
      <div class="hbg">
          
      </div>
    </div>
    <div class="content">
      <div class="mainbar">
          <?

include 'connection.php';
if(isset($_POST['sub1']))
{
   $que=mysql_query("select *from ginbox where frndid='".$_POST['userid1']."' and sendmsz='".$_POST['old1']."' ");

if(mysql_num_rows ($que)>0){

 while($r1=mysql_fetch_array($que))
 {
 ?>
        <div class="hbg"><img src="images/G.jpeg" width="523" height="291" alt="" /></div>
     <br><br>  <h6><center><blockquote><span style="color:skyblue;font-size:40px; " > Your Password successfully change!!</span></blockquote></center></h6><br><br>
     
    <div class="content">
      
 <div class="mainbar">
        
            
     <div class="menu_nav">
      
          <div class="active"><a href="login.php">Next></a></div>
    
          <div class="clr"></div>
     </div>     
  </div>
   </div>

<?php
}

}

else
{
 echo '<h3>'.'Entered field does not match!!!!'.'</h3>';

}

if($que){
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
}

}
?>
        
       <div class="clr"></div>
          </div>
          </div>
           <div class="clr"></div>
           </div>
  </div>


<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
    <div class="clr"></div>
  </div>
</div>

</html>

