<?php
	include('database.php');

if(isset($_POST['submit']))

{
	
	$image=$_FILES['image']['name'];
	$email=$_POST['email'];
    $pass=$_POST['password'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$date=$_POST['dob'];
	$class=$_POST['class'];
	$department=$_POST['department'];	
}

$select="SELECT * FROM `login` WHERE l_username='$email'";
$statemnt_select=mysqli_query($con,$select);

if(!$statemnt_select)
{
	
	echo "error1";
}
else{
	
	if(mysqli_num_rows($statemnt_select)>0)
	{
		
		echo "Already exist";
	}
	else{


$select_login="INSERT INTO `login`( `l_username`, `l_password`, `l_usertype`) VALUES ('$email','$pass','student')";
$statemnt_select_login=mysqli_query($con,$select_login);

if(!$statemnt_select_login)
{
	
	echo "error2";
}
else{
	

	
	$l_id=mysqli_insert_id($con);
	
	$register_student="INSERT INTO `student_signup`(`s_lid`, `s_image`, `s_first_name`, `s_last_name`, `s_username_email`, `s_password`, `s_date_of_birth`, `s_phone_no`, `s_address`, `s_class`, `s_department`) VALUES ('$l_id','$image','$fname','$lname','$email','$pass','$date','$phone','$address','$class','$department')";
//	var_dump($register_student);
	
	$satement_register_student=mysqli_query($con,$register_student);
	
	if(!$satement_register_student)
	{
		echo "error3";
	}
	else
	{
		$s_path="images/profiles/";
		$s_image=$s_path.basename($image);
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$s_image))
		{
			header('location:student_home_page.php');
		}
		else
		{
			echo "error";
		}
		
	}
}
		}
}
	?>
