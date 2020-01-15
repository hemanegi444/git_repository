<?
session_start();
include "connection.php";
$qur1=mysql_query("select * from login");



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
  <script>
function fieldcheck(field,alerttext)
{
 with(field)
  {
   if(value==null||value==""){
   alert(alerttext); field.focus();return false;}
   else
    return true;
   }
 }
 
 
 function nocheck(str,alerttext)
{   var i;
    var s=str.value;
    var l=s.length; 
    for (i = 0; i <l; i++)
    {   
        
        var c = s.charAt(i);
        if ((c < "0") || (c > "9"))
		{
		 alert(alerttext);str.value="";str.focus();return false;
		 }
    }
    
    return true;
}	


  function mailcheck(field,alerttext)
  {
   with(field)
   {
    var apos=value.indexOf("@");
	var dotpos=value.lastIndexOf(".");
	if((apos<1)||(dotpos-apos<2))
	{alert(alerttext);field.focus();return false;}
   }
  
  } 
  function check(field,alerttext)
  {
      var c=field.value;
      if(c!=document.registration.pass.value){
          alert(alerttext);
      return false;}
      else
          return true;
  }
  function maxno(field,alerttext){
      var no=field.value.length;
      if(no!=10)
          {
              alert(alerttext);
              field.focus();
              return false;
          }
          if(no>10){
              alert(alerttext);
              field.focus();
              return false;
          }
          return true;
       }

	
	
	function studentformcheck(thisform)
 {
  with(thisform)
   {
   if((fieldcheck(first,"enter First Name")==false)||
   (fieldcheck(last,"enter Last Name")==false)||
   (mailcheck(userid,"enter valid User-Id")==false)||
   (fieldcheck(pass,"enter Password")==false)||
   (fieldcheck(cpass,"confirm Password")==false)||
   (check(cpass,"check password")==false)||
   (fieldcheck(dd,"enter Birth date info")==false)||
   (fieldcheck(mm,"enter Birth date info")==false)||
   (fieldcheck(yy,"enter Birth date info")==false)||
   (fieldcheck(gen,"enter Gender")==false)||
   (fieldcheck(question,"select the question")==false)||
   (fieldcheck(answer,"Give the answer")==false)||
   (fieldcheck(add,"enter  address")==false)||
   (fieldcheck(mob,"enter mobile no.")==false)||
   (nocheck(mob,"enter mobile no in digits.")==false)||
   (maxno(mob,"mobile digit should in 10")==false))
     return false; 
   } 
 }
  
	</script> 

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
  

   <table align="center" class="tab" cellspacing="20" cellpadding="10">
   <th style="font-size:25px;color:#595959;">Registration</th>
     <tr><td><table id="t2">
                <tr>
   <table id="t2" align="center" cellpadding="3">
   <tr><td></td></tr>
   <tr><td class="colr">First</td><td ><input class="input" type="text"name="first" style="margin-left:35px;" size="25"></td></tr>
   <tr><td  class="colr">Last</td><td><input class="input" type="text" name="last"style="margin-left:35px;"size="25" ></td></tr>
   <tr><td  class="colr">User-ID</td><td ><input class="input" type="text" name="userid"style="margin-left:35px;"size="25" ></td></tr>
   <tr><td></td>
       <td colspan=><span style="color:red;"><? if(isset($_SESSION['err'])) {$a=$_SESSION['err']; echo $a; unset($_SESSION['err']);}?>
   <tr><td>Password</td><td ><input class="input" type="password" name="pass"style="margin-left:35px;"size="25" ></td></tr>
   <tr><td>Confirm Password</td><td class="td"><input  class="input" type="password" name="cpass"style="margin-left:35px;"size="25" ></td></tr>
   <tr> <td> Birthday:</td>
   <td>
    <select   class="sel" name="dd" style="margin-left:35px;"   >
    <option> </option>
    <?php
    for($i=1;$i<=31;$i++){
    ?>
    <option><?php echo $i;?></option>
    <?php }
    ?>
    </select>
    <select  class="sel1"  name="mm" >
    <option ></option>
    <?php
    for($i=1;$i<=12;$i++){
    ?>
    <option><?php echo $i;?></option>
    <?php }
    ?>
    </select>
    <select  class="sel1"  name="yy" >
    <option></option>
    <?php
    for($i=1980;$i<=2013;$i++){
    ?>
    <option><?php echo $i;?></option>
    <?php }
    ?>
    </select>
    </td>
    </tr>
   <tr><td>Gender</td><td>
    <select  class="sel2" style="margin-left:35px;" name="gen" >       
     <option > </option>
    <option value="male" >Male</option>
    <option value="female" >Female</option>
    </td>
       
    <tr><td >Ans these quesion</td>
              
                  <td>
                           <select name="question"  style="margin-left:35px;" class="input" >
                               <option value=""></option>
                               <option value='what is your childhood frnd na'>what is your childhood frnd name?</option>
                               <option value='what is your pet name?'>what is your pet name?</option>
                               <option value='what is your best day?' >what is your best day?</option>
                               <option value='what is your feovrate fruit?'>what is your feovrate fruit? </option>
                           </select>

                   </td>
    </tr>
    
                
   <tr><td>Ans</td><td><input type=text name=answer  style="margin-left:35px;" class="input"></td></tr> 
   <tr><td>Address</td><td ><textarea class="input" rows="3" cols="30"name="add"style="margin-left:35px;" ></textarea></td></tr>
   <tr><td>Mobile Phone</td><td ><input class="input" type="text" name="mob"style="margin-left:35px;"size="25" ></td></tr>
   <tr> <td colspan=2 align=center><input type="submit" value="submit" name="sub"class="sub">
   <input type="reset" value="reset" class="sub"  name="reset"></td>                  
   </table>
          
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