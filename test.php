
<html>
    <head>
        <form onsubmit="checkbox()" action = "#" method="post" >
<fieldset><legend>Select as Many Desserts as You Like!</legend>
<p>Choose Desserts:</p>
Cake: <input type="checkbox" name="cake" value="1" id="cake"><br />
Pie: <input type="checkbox" name="pie" value="yes" id="pie"><br />
Ice-cream: <input type="checkbox" name="ice_cream" value="true" id="ice_cream"><br />
</fieldset>
<input type="submit" value="Don't be Modest!">
</form>
Script:

function checkbox()
{
var allchecked=0;
if(document.getElementById('cake').checked)allchecked=1;
if(document.getElementById('pie').checked)allchecked=1;
if(document.getElementById('ice_cream').checked)allchecked=1;
if(allchecked==0)alert('Very well. I\'ll be right back with the check!');
else alert('We\'ll bring that right out!');
}
        </head>
        <body>
 <form method="post" action="t.php">
            <input type="submit" name="sub">
            
            
            
            
            HTML:

<form onsubmit="return terms()">
<p><input type="checkbox" id="agree" /> I accept terms and conditions. <br />
<input type="submit" value="Check the box and submit" /></p>
</form>
Script:

function terms()
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





HTML:

<form name="radioform" onsubmit="chkradio()" action="#radio" >
<fieldset><legend>Select Color</legend>
<p>Choose a color:<br />
Red: <input type="radio" name="color" value="red"/><br />
Green: <input type="radio" name="color" value="green" /><br />
Yellow: <<input type="radio" name="color" value="yellow" /><br />
</p></fieldset>
<input type="submit" value="Select a color">
</form>
Script:

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
            
            
            </body>
    </html>