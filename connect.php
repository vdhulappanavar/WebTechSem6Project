<?php

$user='root';
$pass='';
$dbname='art_gallery1';
$con=mysqli_connect("localhost",$user,$pass,$dbname);
mysqli_select_db($con,$dbname);
$loggedIn = 0	;
$loggedinemailid;
$loggedinname;
?>




