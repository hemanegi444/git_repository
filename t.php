
<?
session_start();
include 'connection.php';
$sql=mysql_query("SELECT * FROM ginbox where userid ='".$_SESSION['user']."' ");

$result=mysql_fetch_array($sql);

$count=mysql_num_rows($result);

?>
<html>
    <body>
       
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="post">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Lastname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['sendmsz']; ?>"></td>
<td bgcolor="#FFFFFF"><? echo $rows['userid']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['first']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['frndid']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['frnd']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>

     
    

<?php

// Check if delete button active, start this
if(isset($_POST['delete'])){
for($i=0;$i<$count;$i++){
$del_id = $checkbox[$i];
$sql1 = "DELETE FROM ginbox WHERE id='$del_id'";
$result1 = mysql_query($sql1);
}

// if successful redirect to delete_multiple.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
}
}
mysql_close();
?>

</table>
</form>
</td>
</tr>
</table>
</body>
    </html>