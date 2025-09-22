<?php
session_start();
include('database.php');

if(isset($_POST['submit']))
{
	$name=$_POST['email'];
	$pass=$_POST['password'];
	
	$select_login="SELECT `l_id`, `l_username`, `l_password`, `l_usertype` FROM `login` WHERE l_username='$name' AND l_password='$pass'";

	if (!$sl_statement=mysqli_query($con,$select_login))
	{
		echo "error";
	}
	else
	{
		if(mysqli_num_rows($sl_statement)<1)
		{
			$_SESSION['error']="incorrect email or password";
			header('location:login_action.php');
		}
		else
		{
			$l_array=mysqli_fetch_array($sl_statement);
			$usertype=$l_array['l_usertype'];
			$login_id=$l_array['l_id'];
			
			$_SESSION['id']=$login_id;
			
			if($usertype=="teacher")
			{
				header('location:teacher_home_page.php');
			}
			else if($usertype=="student")
			{
			header('location:student_home_page.php');
			}
			else if($usertype=="admin")
			{
				header('location:admin_dash_board.php');
			}
			
		}
	}
}

?>