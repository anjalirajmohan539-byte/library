<?php

include('database.php');

if(isset($_POST['button']))
{
	$s_id=$_POST['s_id'];
	

	$update="UPDATE `book_request` br SET `fine`=1,`recent_active_date`= CURRENT_TIMESTAMP WHERE  CURRENT_DATE > br.return_date AND fine = 0 AND br.student_id=$s_id";
	
	var_dump($update);
		if(!$select_statemnt=mysqli_query($con,$update))
		{
			echo "error";
		}
	else
	{
		echo 'insert';
	}
	}
?>