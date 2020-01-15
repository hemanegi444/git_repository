<?
session_start();
include "connection.php";
$qur=mysql_query("select first from reg where first like'$user%' ");
$row=  mysql_fetch_array("$qur");



 ?>

<html>
<head>
<title>SocialNet</title>

<style type="text/css">
body {
	margin:0;
	padding:0;
	width:100%;
	color:#959595;
	font:normal 12px/1.8em Arial, Helvetica, sans-serif;
	background:url(images/bg.jpg);
}
html {
	padding:0;
	margin:0;
}
.main {
	padding:0;
	margin:0;
	background:url(images/main_bg.jpg) repeat-y center;
        height:680px;
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
p {
	margin:8px 0;
	padding:0 0 8px 0;
	font:normal 12px/1.8em Arial, Helvetica, sans-serif;
}
p.spec {
}
a {
	color:#97c950;
	
}
a.rm, a.com {
	padding:0;
	text-decoration:none;
}
.header, .content, .menu_nav, .fbg, .footer, form, ol, ol li, ul, .content .mainbar, .content .sidebar {
	margin:0;
	padding:0;
}
.main_resize {
	margin:0 auto;
	width:969px;
}
.header {
	margin:0 auto;
	width:923px;
}

.box{
    background:black;
	color:black;
        font-size: 20px;
}
a{text-decoration:none;}
.fbg {
	padding:10px 0;
	background: repeat-y center;
}
.fbg_resize {
	margin:0 auto;
	padding:0;
	width:923px;
}
.fbg img {
	padding:4px;
	border:1px solid #cfd2d4;
	background-color:#fff;
}
.fbg p, .fbg h2 {
	color:#fbfbfb;
}
.fbg a {
	color:#fbfbfb;
}

	
.fbg .col {
	margin:0;
	float:left;
	background:url(images/fbg_line.gif) repeat-y right;
}
.fbg .c1 {
	padding:0 15px 0 0;
	width:200px;
}
.fbg .c2 {
	padding:0 15px;
	width:383px;
}
.fbg .c3 {
	padding:0 0 0 15px;
	width:280px;
	background:none;
}

.fbg .c1 img {
	margin:8px 16px 8px 0;
}
.fbg .c3 img {
	margin:8px 16px 4px 0;
	float:left;
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
.footer p {
	margin:0;
	padding:4px 0;
	line-height:normal;
	color:#9a9a9a;
}
.footer a {
	color:#9a9a9a;
	padding:inherit;
	text-decoration:underline;
}
.footer a:hover {
	text-decoration:none;
}
.footer .lf {
	float:left;
}
.footer .rf {
	float:right;
}





.clr {
	clear:both;
	padding:0;
	margin:0;
	width:100%;
	font-size:0;
	line-height:0;
}
.tab{background:url(images/bg.jpg);
border-radius:1em;}

</style>

	



</head>
 <body onLoad="document.registration.userid.focus();">
<form name="registration" method="post" action="admregcode.php" onSubmit="return studentformcheck(this)" >
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small></small></a></h1>
      </div>
      
      <div class="clr"></div>
     
  
    </div>
   
     
  </div>
  <div class="fbg">
    <div class="fbg_resize">
  

  <table class="tab">
         <span style="color:red;">&nbsp;&nbsp;<? echo $_SESSION['qur'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         want to block &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type=submit value=accept name="accept" >
  </table>
</div>
       
      
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
    
    <div class="clr"></div>
  </div>
</div>
</html>