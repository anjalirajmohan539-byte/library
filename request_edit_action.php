<?php

include('database.php');

if(isset($_POST['update']))
{
	 $status=$_POST['status'];
	$date= $_POST['rd'] != "" ? "'" . $_POST['rd'] . "'" : "NULL";
	//(condition) ? true statemnet : false statement
//	$approve=$status==1  "" ? "'" date("Y-m-d")' ""
	if($status==1)
	{
		$date1="'" . date("Y-m-d") ."'";
		echo $date1;
	}
	else
	{
		$date1="NULL";
		echo $date1;
	}
	$id=$_POST['r_id'];
	
	$update="UPDATE `book_request` SET `status`=$status,`return_date`=$date, `approve_date`=$date1 WHERE id=$id";
	
	var_dump($update);
	if(mysqli_query($con,$update))
	{
		if($status==1)
		{
			header('location:admin_book_request.php?status=1');
		}
		else
		{
			header('location:admin_book_request.php?status=2');
		}
		
	}
	else
	{
		echo "error";
	}
}

?>