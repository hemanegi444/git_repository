<?
session_start();
include "connection.php";
$qur1  =mysql_query("select * from profile where userid='".$_SESSION['user']."'");
$image=mysql_fetch_array($qur1);
$username  =mysql_query("select * from reg where userid='".$_SESSION['user']."'");
$name=mysql_fetch_array($username);



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
        height:auto;
}
.logo {
 
	float:left;
	width:400px;
	height:86px;
	
}
.search {
	float:right;
	width:250px;
	padding:25px 0;
}
.search span {
	width:235px;
	display:block;
	background:#FFF;
	height:29px;
	margin:0;
	padding:0;
	border:1px solid #e1dddd;
}
.search input#s {
	float:left;
	width:185px;
	padding:7px 0 7px 10px;
	margin:0;
	border:0;
	background:none;
	color:#afaeae;
	font:normal 12px/15px Arial, Helvetica, sans-serif;
}
.search .btn {
	float:left;
	padding:0;
	margin:0;
	border:0;
	width:auto;
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
	text-decoration:underline;
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
.me{    float:left;
	width:200px;
	height:100px;}
.hbg {
	
	width:550px;
	height:200px;
        float: right;
            
}
.menu_nav {
	margin:0 0 10px;
	padding:0;
}
.menu_nav ul {
	list-style:none;
	margin:0;
	padding:0;
	float:right;
}
.menu_nav ul li {
	margin:0;
	padding:15px 5px 15px 0;
	float:left;
	background:url(images/menu_line.jpg) repeat-x top;
}
.menu_nav ul li a {
	display:block;
	margin:0;
	padding:11px 25px;
	color:#878989;
	text-decoration:none;
	font-size:13px;
	line-height:16px;
}
.menu_nav ul li.active a, .menu_nav ul li a:hover {
	color:#fff;
	text-decoration:none;
	background:#78bbe6;
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
.mainbar img.fl {
	margin:4px 16px 4px 0;
	float:left;
}
.mainbar .article {
	margin:0;
	padding:10px 0 5px 15px;
}
.mainbar .article a {
	color:#78bbe6;
}
.mainbar .post-data a {
	color:#595959;
}
.mainbar .spec a {
	padding:5px 15px;
	background:#78bbe6;
	color:#FFF;
}
.sidebar {
	padding:0;
	float:left;
	width:285px;
}
.sidebar .gadget {
	margin:0;
	padding:10px 15px 10px 0;
}
.sidebar .gadget .testi {
	padding:0 0 0 0;
}
.sidebar .gadget .title {
	text-align:right;
}
.sidebar .gadget span.q {
	text-align:right;
	font:normal 60px/12px Arial, Helvetica, sans-serif;
	color:#d9d9d9;
}
ul.sb_menu, ul.ex_menu {
	margin:0;
	padding:0;
	color:#939393;
	list-style:none;
}
ul.sb_menu li, ul.ex_menu li {
	margin:0;
}
ul.sb_menu li {
	padding:2px 0 2px 15px;
}
ul.ex_menu li {
	padding:2px 0 2px 15px;
}
ul.sb_menu li a, ul.ex_menu li a {
	display:block;
	color:#959595;
	text-decoration:none;
	padding:5px;
	margin-left:-15px;
	padding-left:15px;
        width: 200px;
}
ul.sb_menu li a:hover, ul.ex_menu li a:hover, ul.sb_menu li.active a, ul.ex_menu li.active a {
	color:#FFF;
	background:#78bbe6;
}
ul.sb_menu li a:hover {
	text-decoration:none;
}
ul.ex_menu li a:hover {
	text-decoration:none;
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




.fl {
	float:left;
}
.fr {
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
.tab{    background:url(images/bg.jpg);}
  #heading{font-size:25px;font-family:Arial, Helvetica, sans-serif;;color:#595959;}
  

</style>
      <script>
          
function fieldcheck()
{
if(document.getElementById('agree').checked)
{
alert('Thank you. Form is ready for approval.');
return true;
}
else
{
alert('Terms rejected. Can not proceed....');
return false;
}
}
 
                
            </script>               


</head>
<body >
      
    
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small></small></a></h1>
                <span style="color:red;position:absolute;top:100px;left:130px;" ><?php echo $name['first']." ".$name['last'];?></span>
      </div>
      <div class="search">
         <form name="searchcode"method="post" action="searchcode.php"  >
          <span>
          <input type="text"  name="searchdeactive" id="s" />
     <input name="searchsubmit" type="image" src="images/search.gif" id="searchsubmit" class="btn"  />
           <div style="color:black">
                <? if(isset($_SESSION['err']))
                {
                $a=$_SESSION['err'];
                echo $a;
                unset($_SESSION['err']);                
                }
                ?>
                </div>
          </span>
          
        </form>
        <!--/searchform -->
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          
        
       <li><a href="about.php">About Us</a></li>
      
          <li><a href="login.php">Logout</a></li>
        </ul>
        <div class="clr"></div>
      </div>
       <div class="me">  <img src="<?php echo "images/".$image['dfimg'];   ?>"width="100" height="150"  alt="" /></div>
      <div class="hbg">
          
             <div class="tab">
                    <form name="msz" method="post"   action="dyes.php"  onSubmit="return fieldcheck()">
           <center> <label id="heading" > Account Deactivate ?</label></center><br><br><br>
           <table cellspacing="17" align="center">
        <tr><td ><input type="checkbox" id="agree">yes</td> </tr>
        
       
<tr><td><input type=submit name='sub1' value=Done ></td></tr>
        </table>
           </form>
        </div>
            </div>
          
          
      </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div >
          
          </div>
          <div >
     
          </div>
         
        </div>
        <div class="sidebar">
          <div class="gadget">
         
          </div>
          <div class="gadget">
              <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
                       <li class="active"><a href="home.php">Home</a></li>
              <li><a href="inbox.php">Inbox</a></li>
              <li><a href="friendrequest.php">Friend Request</a></li>
              <li><a href="friendlist.php">Friends</a></li>
              <li><a href="chatbox.php">Chatbox</a></li>
               <li><a href="profile.php">profile</a></li>
               
              <li><a href="setting.php">Setting</a></li>
            </ul>  
          </div>
         </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
 
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>

  </div>
</div>
</form>
</body>
</html>
