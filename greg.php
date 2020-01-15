
<html>
    <head>
        <style type="text/css">
            body{background-color:white;}
               #mainpage{
               width:px;
               height:800px;
               margin-left:100px;
               margin-right:100px;
               margin-bottom:100px;
                background-color:whitesmoke; 
               }
               #header{
               width:auto;
               height:100px;
               padding:10px;
               background-color:gray; 
               }
            
               #Registration{
               font-family:Forte,Verdana ; 
               
               width:350px;
               height:580px;
               float:right;
               margin-top:40px;
               margin-right:280px;
             
               border:1px solid black;
             background-color:gray;
               font-size:12px;
               }
               #t1{ font-size:25px;font-family:broadway;}  
               #t2{ font-size:15px;   font-family:arial ;}
               .td1{  width:330px;padding:6px;}
              
               .input{
                width:170px;
                boarder-radius:3px;
                padding:5px;
            
                }
                #home{position:absolute; top:70px;left:930px;  font-size:17px; }
               
               
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
function lengthRange(inputtxt, minlength, maxlength)
{  	
   var userInput = inputtxt.value;  
   if(userInput.length >= minlength && userInput.length <= maxlength
        return true;  	
      }
   else
      {  	
	alert("Please input the password between minimum 8 and maximum 20 characters");
		
        return false;  	
      }  
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
   (lengthRange(pass,8,20)==false)|| 
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
   else{alert('Thank you. Form is ready for approval.');
     return true;
} 
   } 
 }
  
	</script>  

                   
    </head>
<body onLoad="document.registration.userid.focus();">

<div id="mainpage">
<div id="header"><center><font face="broadway" size="50" color="#4B0082"> GMAIL</font></center></div>
<form name="registration" method="post" action="gregcode.php" onSubmit="return studentformcheck(this)" >

    <div id="Registration">
   <table>
    <tr><td><table id="t1">
        <tr><td class="td1"style="color:#4B0082;" bgcolor="gray"  align="center">Registration</td></tr>
        </table></td>   
    </tr> 
         
   <tr><td><table id="t2">
                <tr>
   <table id="t2" align="center" cellpadding="3">
   <tr><td></td></tr>
   <tr><td>First</td><td ><input class="input" type="text"name="first" style="margin-left:35px;" size="25"></td></tr>
   <tr><td>Last</td><td><input class="input" type="text" name="last"style="margin-left:35px;"size="25" ></td></tr>
   <tr><td>User-ID</td><td ><input class="input" type="text" name="userid"style="margin-left:35px;"size="25" ></td></tr>
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
   </body>
   </html>