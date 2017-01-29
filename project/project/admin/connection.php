<?php


 define("host","localhost");
 define("username","root");
 define("password","");
 define("database","db_niitclass7");

 $link=new mysqli(host,username,password,database);
if($link->connect_errno > 0){
	exit("Connection Error .".$link->connect_error);
}

session_start();
?>

