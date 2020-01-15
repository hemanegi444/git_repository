<?
session_start();
include "connection.php";
$qur1=mysql_query("select * from login");

$qur=mysql_query("select first from reg  ");
$qur2=mysql_query("select * from admin  ");
$row2=  mysql_fetch_array($qur2);
$qur3=mysql_query("select * from areg");
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
	color:#595959;
}
h1 small {
	padding:0 10px;
	font:normal 12px/1.2em Arial, Helvetica, sans-serif;
	letter-spacing:normal;
}
h2 span{
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
	
}
.fbg .c1 {
   
	padding:0 15px 0 0;
	width:240px;
   
}
.fbg .c2 {
	padding:0 15px;
	width:413px;
   
}
.fbg .c3 {
	padding:0 0 0 15px;
	width:210px;
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


.clr {
	clear:both;
	padding:0;
	margin:0;
	width:100%;
	font-size:0;
	line-height:0;
}
.box{background:url(images/bg.jpg);
     margin-top: 100px;
     width:923px;
     height:300px;
        
}
.c11{margin-left:20px;}

</style>
<script>
function showHint(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","admsearchcode.php?q="+str,true);
xmlhttp.send();

}
</script>
 

</head>
<body>
   
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small></small></a></h1>
        <span style="color:red;position:absolute;top:100px;left:130px;" ><?php echo $row2['name'];?></span>
      </div>
          <div class="menu_nav">
        <ul>
         
          <li class="active"><a href="login.php">Logout</a></li>
         </ul>
         <div class="clr"></div>
         </div>
  
      <div class="clr"></div>
     
  
    </div>
   </div>
     <div class="fbg">
     <div class="fbg_resize">
      <div class="box">
      <div class="col c1">
      <div class="c11">
      <h2><span></span></h2>
      </div>
      </div>
      <div class="col c2">
        <form name="Ublock" method="post" action="admblock.php" >
        <h2><span>User Block/Resume</span></h2>
        <select name="b">
                     <option></option> 
                   
                  <? while($row1=mysql_fetch_array($qur1)){
                      ?>
                      <option value=<?echo $row1['userid'];?>>Name:<?echo $row1['userid'];?></option>

                          <?}?>
                 
        </select>
        <input type=submit value=block name="block" >
      
          <h2><span>Unblock</span></h2>
           <select name="c">
                  <option></option> 
                  
                  <? while($row3=mysql_fetch_array($qur3)){
                      ?>
                  <option value=<?echo $row3['userid'];?>>Name:<?echo $row3['userid'];?></option>

                  <?}?>
        </select>
        <input type ="submit" value="unblock" name="unblock">
        </form>
      </div>
      <div class="col c3">
       <h2><span>New User</span></h2>  
      <a href="admreg.php"><input type="submit" name="add" value="ADD " ></a>
      </div>
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
      
       </body>
</html>



