<?
session_start();
include 'connection.php';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
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
	margin:0;
	padding:0;
	float:right;
	width:638px;
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
.nn{font-size: 13px;}
.menu_nav  a {
	display:block;
	margin:0;
	padding:11px 25px;
	color:#878989;
	text-decoration:none;
	font-size:13px;
	line-height:16px;
}
.menu_nav .active a, .menu_nav  a:hover {
	color:#fff;
	text-decoration:none;
	background:#78bbe6;
}.menu_nav  {
	margin:0;
	padding:15px 5px 15px 0;
	float:left;
	background:url(images/menu_line.jpg) repeat-x top;
}
.con{background-color:red;
         width:30px;
         height:20px;
         aligment:center;
    
}
  
</style>


</head>
<body>
    <form name="frm" method="POST" action="logincode.php" onsubmit=" return fun();">
<div class="main">
  <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small></small></a></h1>
      </div>
      <br><br><br> <div class="hbg"><img src="images/G.jpeg" width="523" height="291" alt="" /></div>
                  <br><br>  <h3><blockquote><span style="color:skyblue;font-size:40px; " > About Us</span></blockquote></h3><br><br>
   <div class="menu_nav">
       <div id="con">
           <p><h4>
               Social Net was started in September 2013 by SLSET Students Hema,Priyanka,Astha And Pooja they are Final Year Students still they are work on them.<br>The main goal of the service is to establish a network among the people residing in all over the world. All the information can be easily accessed and shared among the people.
               Make your social life and that of your friends, more active and stimulating. Social network can help you both maintain existing relationships and establish new ones by reaching out of people you have never met before.  Before getting to know a forever member, you can even see how they are connecting you through the friends network.  
               </h4> </p></div>
       <br><br>  <h3><blockquote><span style="color:skyblue;font-size:40px; " >Contact Us</span></blockquote></h3><br><br>
       <p><h4>We welcome your questions, comments, and suggestions. Here's how to contact us:<br>
               Social Net members are specially trained to connect families with information, resources and opportunities. They are available to answer calls and emails from 9am to 1pm local time. For all other inquiries not related to family resources, please look below.

               <br>  <Bold>Call us! </Bold>(+91) 9412943559

                   <br>Email us! socialNetmember@gmail.com


</h4></p>
          
          
      </div>
       </form>
      
      
        <div class="clr"></div>
    <div class="content">
      
        <div class="mainbar">
        
            
         
  </div>
  <div class="fbg">
   <div class="clr"></div>
    </div>

<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
    <div class="clr"></div>
  </div>
</div>

</html>
