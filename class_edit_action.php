<?php

include('database.php');

if(isset($_POST['submit']))
{
	$class=$_POST['class'];
	$id=$_POST['s_id'];


$s_update="UPDATE `student_signup` SET `s_class`='$class' WHERE s_id=$id";
 
var_dump($s_update);
if(!$s_statement=mysqli_query($con,$s_update))
{
	echo 'error1';
}
	header('location:teacher_home_3_page.php');
	
}
	



?>