<?php
define("host", "localhost");
define("username", "root");
define("password", "");
define("database", "project");

$link = new mysqli (host,username,password,database);
if($link->connect_errno > 0){
	exit("connection error .".$link-> connect-error);
}

session_start();
?>