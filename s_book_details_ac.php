<?php
include('database.php');

if(isset($_POST['button']))
{
	$sid=$_POST['s_id'];
	$bid=$_POST['b_id'];
	$count=$_POST['count'];
//	echo "$sid , $bid";
	
	$insertb="INSERT INTO `book_request`(`student_id`,`book_id`,`status`) VALUES ($sid,$bid,0)";
	
//	var_dump($insertb);
	if(mysqli_query($con,$insertb))
	{
		header('location:s_books.php');
		
		$update="UPDATE `add_book` SET `book_count`=$count-1 WHERE b_id=$bid";
		if(!$update_statemnt=mysqli_query($con,$update))
		{
			
		}
	}
	else
	{
		echo 'insert';
	}
}
?>