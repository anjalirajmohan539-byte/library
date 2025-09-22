<?php

include('database.php');

if(isset($_POST['submit']))
{
	$image=$_FILES['image']['name'];
	$name=$_POST['fullname'];
	$age=$_POST['age'];
	$email=$_POST['emaill'];
	$address=$_POST['address'];
	$pass=$_POST['password'];
	$phone=$_POST['phone'];
	$class=$_POST['class'];
	$department=$_POST['department'];
}


$select="SELECT * FROM `login` WHERE l_username='$email'";
$statement_select=mysqli_query($con,$select);


if(!$statement_select)
{
	echo 'error';
}
else
{
	if(mysqli_num_rows($statement_select)>0)
	{
		echo "already in";
	}
	else
	{
		$select_login="INSERT INTO `login`(`l_username`, `l_password`, `l_usertype`) VALUES ('$email','$pass','teacher')";
		$statement_select_login=mysqli_query($con,$select_login);
		
		if(!$statement_select_login)
		{
			echo "error1";
		}
		else
		{
				
			$l_id=mysqli_insert_id($con);
			$register_teacher="INSERT INTO `teacher_signup`(`t_lid`,`t_images`, `t_full_name`, `t_age`, `email`, `t_password`,`address` , `t_phone_no`, `t_class`, `t_department`) VALUES 
			($l_id,'$image','$name','$age','$email','$pass','$address','$phone','$class','$department')";
			
			var_dump($register_teacher);
			$statement_register_teacher=mysqli_query($con,$register_teacher);
			
			
			if(!$statement_register_teacher)
			{
				echo "error2";
			}
			else
			{
				$t_path="images/profiles/";
				$t_pic=$t_path.basename($image);
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$t_pic))
				{
					
				}
				else
				{
					echo "already exists";
				}
//				header('location:login.php');
			}
		}
	}
}