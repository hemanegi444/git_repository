<?php

$con=@mysql_connect("localhost","root","") or die("unable to connect localhost");
mysql_select_db("hello",$con)or die("database does not exists");
?>
