



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

     

</style>
<script language="javascript">
 
    function fun()
    {
      
        if(document.frm.userid.value==""){
            document.getElementById("name1").innerHTML="Userid should not empty";
             document.getElementById("userid").style.border="1px solid red";

         return false;
        }
       if(document.frm.pass.value==""){

             document.getElementById("pass1").innerHTML="password should not empty";
             document.getElementById("pass").style.border="1px solid red";
            

          return false;
       }
       if(document.frm.ques.value==""){

             document.getElementById("ques1").innerHTML="Plz select the question";
             document.getElementById("ques").style.border="1px solid red";
            

          return false;
       }
        if(document.frm.ans.value==""){

             document.getElementById("ans1").innerHTML="Plz answer these question";
             document.getElementById("ans").style.border="1px solid red";
            

          return false;
       }
       return true;
    }
</script>

</head>
<body>
    <form name="frm" method="POST" action="comecode.php" onsubmit=" return fun();">
<div class="main">
  <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small>Connecting people</small></a></h1>
      </div>
      <div class="hbg"><img src="images/outer.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      
        <div class="mainbar">
        
            <h2><span>Are You Old user??</span></h2>
            
            <div id="table" >
            <table cellpadding="10">
                
            <tr><td><table  cellpadding="2">
              
                </table></td>   
            </tr>
                <tr><td><table  cellpadding="3">
                <tr>
                    <td class="td1">User-Id</td>
                    <td><input type="text"name="userid"id="userid" size="30" ><span style="color:red;font-size:16px;"></td>
                </tr>
               
                 <tr>
            <td colspan=2> <span id="name1" style="color:red;font-size:16px;"> </span></td>
            </tr>
                 <tr>
                    <td class="td2">Password</td>
                    <td ><input type="password"name="pass"id="pass" size="30" ></td>
                </tr>
         <tr>
         <td colspan=2> <span id="pass1" style="color:red;font-size:16px;"> </span></td>
         </tr>
        <tr><td  class="td1">Ans these quesion</td>
        <td  >
        <select name='ques' id="ques">
            <option></option>
        <option value='what is your childhood frnd name?'>what is your childhood frnd name?</option>
        <option value='what is your pet name?'>what is your pet name?</option>
        <option value='what is your best day?' >what is your best day?</option>
        <option value='what is your feovrate fruit?'>what is your feovrate fruit? </option>
        </select>   

        </td>
        </tr>
            <tr>
            <td colspan=2> <span id="ques1" style="color:red;font-size:16px;"> </span></td>
            </tr>
              <tr>
                  <td></td>
         <td><input type="text"name="ans"id="ans" size="30" ><span style="color:red;font-size:16px;"></td>
                </tr>
            <tr>
            <td colspan=2> <span id="ans1" style="color:red;font-size:16px;"> </span></td>
            </tr>
        
                 <tr><td><input type="submit" name="sub" value="Active"></td></tr>
                 
                </td></tr>
                </table></td>
            </tr>
            </table>
            </div>
       <div class="clr"></div>
          </div>
          </div>
           <div class="clr"></div>
           </div>
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