<html>
    <head>
        <script>
          
function chkradio()
{
var elem=document.forms['radioform'].elements['color'];
len=elem.length-1;
chkvalue='';
for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;
}
if(chkvalue=='')
{
alert('No button checked.');
return false;
}
alert ('value of checked button is '+chkvalue);
return true;
}
                
            </script>
        </head>
    
 <body>
<div class="tab">
          <form name="radioform" onsubmit="chkradio()" action="#radio" >
<fieldset><legend>Select Color</legend>
<p>Choose a color:<br />
Red: <input type="radio" name="color" value="red"/><br />
Green: <input type="radio" name="color" value="green" /><br />
Yellow: <<input type="radio" name="color" value="yellow" /><br />
</p></fieldset>
<input type="submit" value="Select a color">
</form>
        </div>
   </body>
   </html>