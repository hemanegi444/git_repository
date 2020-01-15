<?
session_start();
include 'connection.php';

$qur=mysql_query("select * from ginbox where frndid='".$_SESSION['user']."' ");

  ?>
<html>
    <head>
        <style type="text/css">
            body{background-color:white;}
               #mainpage{
               width:px;
               height:1500px;
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
               #msz{
               width:750px;
               height:1200px;
               margin-top:50px;
               margin-left:80px;
              
               background-color: white;
               }
                #heading{  font-size:30px;color:#4B0082;font-family:broadway ;}
                #logout{position:absolute; top:100px;left:930px;  font-size:17px; }
                #Home{position:absolute; top:100px;left:870px;  font-size:17px; }
               #Notification{position:absolute; top:100px;left:770px;  font-size:17px; }
                #inbox{
                width:730px;
                height:42px;
                background-color:gray;
                margin-left:10px;
              
            }
                 



</style>
                 
               </head>
               <body>
              <form name="msz" method="post" action="gdelete.php">
        <div id="mainpage">
            
            <div id="header"><center><font face="broadway" size="50" color="#4B0082">  GMAIL</font></center></div>
            <span style="color:black;"><?php echo $_SESSION['user'];  ?></span>
            <div id="logout">
            <a href="gmaillogin.php">Logout</a>
            </div> 
            
        
      
            <div id="msz">
            <center> <label id="heading" >Inbox</label></center><br><br><br>
           <?php while($row=mysql_fetch_array($qur))
            {
           ?>
            <div id="inbox"><font face="arail" size="4" >
         
           &nbsp&nbsp     
           <span style="color:green;"><? echo $row['ufirst'];?></span>
            
           <span style="position:absolute;left:420px;"><? echo $row['sendmsz'];?></span></font>
           <input type=submit value=Delete name="delete"  style="position:absolute;left:865px;"></div></p>
           
        
           <?php

            }
            ?>

              
        </div>
</div>
                  </form>
                </body>
                </html>
                 <!DOCTYPE html>


