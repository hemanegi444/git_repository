<?

include 'connection.php';
if(isset($_POST['sub1'])){
$que=mysql_query("select * from reg where userid='".$_POST['userid']."' and question='".$_POST['fquestion']."' and answer='".$_POST['fanswer']."' ");
if(mysql_num_rows ($que)>0){

 while($r1=mysql_fetch_array($que))
 {
 ?>
<form method="post" action="codematch.php">
 <table id="forgetA">
 <tr><td id="label">Your recovry email id is</td>
     <td><textarea   name=remail'' > <?echo $r1['userid'];?> </textarea></td>
 </tr>
  <tr><td >please enter your username</td>
   <td><input type=text name='userid'  ></td>
  </tr>
  </tr><td>enter the code that sent to your email id </td>
   <td><input type="text" name="code"></td></tr>
 <tr><td><input type="submit"  value="ok" name="sub2"></td></tr>
 </table>
 </form>

<?php
}
}

else
{
 echo '<h3>'.'user name does not match!!!!'.'</h3>';
}
if($que){
    $qur1=mysql_query("select * from greg where userid= '".$_POST['userid']."'");
    $row1=mysql_fetch_array($qur1);
    $frndid=$row1["userid"];
    $frnd=$row1["first"];
    
     
    
   
    $rno=rand(1000,10000);
    mysql_query("insert into ginbox values('SocialNet.com','SocialNet','$frndid','$frnd','$rno')");
    
}
}
?>