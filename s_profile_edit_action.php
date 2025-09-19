<?php

include('database.php');

if(isset($_POST['button']))
{
	$image=$_FILES['image']['name'];
	$image2=$_POST['image2'];
	$name=$_POST['username'];
	$id=$_POST['id_no'];
	$course=$_POST['course'];
	$email=$_POST['email'];
	
	if($image=="")
	{
		$image=$image2;
	}

			
			$update_profile="UPDATE `student_signup` SET `s_image`='$image',`s_first_name`='$name',`s_username_email`='$email',`s_department`='$course' WHERE s_lid='$id'";
			
			$update_login="UPDATE `login` SET `l_username`='$email' WHERE l_id='$id'";

			
			if(!$update_l_statemnt=mysqli_query($con,$update_login))
			{
				echo "error4";
			}
			if (!$update_statemnt=mysqli_query($con,$update_profile))
			{
				echo "error";
			}
			else
			{
				if($image2 !="")
				{
						$pic="images/profiles/";
				$s_pic=$pic.basename($image);
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$s_pic))
					
				{
					echo "upload";
				}
				else
				{
					echo "error33";
				}
				}
			
			}
			
		}

?>