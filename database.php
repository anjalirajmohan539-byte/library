<?php
$servername="localhost";
$username="root";
$password="";
$database="library_management";
$con=new mysqli($servername,$username,$password,$database);
if($con -> connect_error) 
{
	die("connection error");
}
?>