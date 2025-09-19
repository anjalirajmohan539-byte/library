<?php
include('database.php');

if(isset($_POST['submit']))
{
	echo $image=$_FILES['image']['name'];
	$first_n=$_POST['name1'];
	$image2=$_POST['image2'];
	$id=$_POST['id'];
	$age=$_POST['age'];
	$add=$_POST['add'];
	$email=$_POST['email'];
	$class=$_POST['cource'];
	$contact=$_POST['number'];
	
	
	if($image=='')
	{
		$photo=$image2;
	}
	else
	{
		$photo=$image;
	}
	
	$t_update="UPDATE `teacher_signup` SET `t_images`='$photo',`t_full_name`='$first_n',`t_age`='$age',`email`='$email',`address`='$add',`t_class`='$class',`t_phone_no`='$contact' WHERE t_lid=$id";
	
	$l_update="UPDATE `login` SET `l_username`='$email' WHERE l_id=$id";
	
	
	if(!$t_statemnt=mysqli_query($con,$t_update))
	{
		echo "error";
	}
	
	if(!$l_statemnt=mysqli_query($con,$l_update))
		
	{
		echo "error1";
	}
	else
	{
		if($image !="")
				{
						$pic="images/profiles/";
				$t_pic=$pic.basename($image);
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$t_pic))
					
				{
					echo "upload";
				}
				else
				{
					echo "uploading error";
				}
				}
		echo "success";
			
	}
}
?>