<?
session_start();
if(isset($_SESSION['user']))
    unset($_SESSION['user']);
?>
<html>
    <head>
        <style type="text/css">
            body{background-color:white;}
               #mainpage{
               width:px;
               height:900px;
               margin-left:100px;
               margin-right:100px;
               margin-bottom:100px;
               background-color:whitesmoke;             }
                 #header{
                width:auto;
                height:100px;
                padding:10px;
                background-color:gray;          }
            #table{
                position: absolute;
                top:330px;
                right:370px;
                width:350px;
                height:250px;
                background-color:gray;
                
            }
            #t1{ font-size:25px;font-family:broadway;}
            #t2{   margin-left:30px;margin-top:30px;font-size:15px;font-family:Forte,Verdana;}
            .td1{  width:330px;padding:6px;}
            .td2{  width:210px;padding:6px;}
            .nn{
                font-size:12px;
            }
            #reg{position:absolute; top:100px;left:930px;  font-size:17px; }
            </style>

<script language="javascript">
 
    function fun()
    {
      
        if(document.frm.userid.value==""){
            document.getElementById("userid1").innerHTML="name should not empty";
             document.getElementById("userid").style.border="1px solid red";

         return false;
        }
       if(document.frm.pass.value==""){

             document.getElementById("pass1").innerHTML="password should not empty";
             document.getElementById("pass").style.border="1px solid red";
            

          return false;
       }
       return true;
    }
</script>
</head>
<body>
    <form name="frm" method="POST" action="glogincode.php" onsubmit=" return fun();">

        <div id="mainpage">

            <div id="header"><center><font face="broadway" size="50" color="#4B0082"> GMAIL</font></center></div>
             
                </div>
            <div id="table">
            <table cellpadding="5">
                
            <tr><td><table id="t1" cellpadding="2">
                <tr><td class="td1"style="color:#4B0082;" bgcolor="gray"  align="center">Please login</td></tr>
                </table></td>   
            </tr>
             
                      
                 
            <tr><td><table id="t2" cellpadding="3">
                <tr>
                    <td class="td1">User-Id</td>
                    <td><input type="text"name="userid"id="userid" size="30" class="td2"></td>
                </tr>
               
                 <tr>
            <td colspan=2> <span id="userid1" style="color:red;font-size:16px;"> </span></td>
            </tr>
            
                <tr>
                    <td  class="td1">Password</td>
                    <td ><input type="password"name="pass"id="pass" size="30" class="td2"></td>
                </tr>
         <tr>
         <td colspan=2> <span id="pass1" style="color:red;font-size:16px;"> </span></td>
         </tr>
         
        <tr> <td colspan=2> <span style="color:red;font-size:16px;">
   <?php  if(isset($_SESSION['err']))
   {$a=$_SESSION['err']; echo $a; unset($_SESSION['err']);}    ?></span></td></tr>
                
                 <tr><td><input type="submit" name="sub" value="Login"></td></tr>

                 <tr><td  class="nn" style="position:absolute;top:220px;right:10px;"><a href ="greg.php">Create an Account??</a></li>
                </td></tr>
                </table></td>
            </tr>
            
            </table>
            </div>
        </div>  
</form>        
</body>            
            