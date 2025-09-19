
<?php

session_start();
include('database.php');

if(isset($_SESSION['id']))
{
	
	$id=$_SESSION['id'];
	

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/library_book_form.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid book_form">
		<?php
		
	$s_select="SELECT * FROM `student_signup` where s_lid='$id'";
$s_statement=mysqli_query($con,$s_select);

if(!$s_statement)
{
	echo "error";
}
else
{
		$s_reg_data=mysqli_fetch_array($s_statement);
		
		$img=$s_reg_data['s_image'];
		$s_user=$s_reg_data['s_first_name'];
		$s_num=$s_reg_data['s_lid'];
		$s_course=$s_reg_data['s_department'];
		$s_email=$s_reg_data['s_username_email'];
	
	
		?>
			<div class="container form">
				<h1>EDIT PROFILE</h1>
	 <form action="s_profile_edit_action.php" method="post" enctype="multipart/form-data">
		 <h2>PROFILE</h2>
		 <input type="file" id="image" name="image" value="<?php echo $img;?>">
		 <input type="hidden" id="image" name="image2" value="<?php echo $img;?>">
		 <h2>USERNAME</h2>
        <input type="text" name="username" id="title" value="<?php echo $s_user;?>">
        <input type="hidden" name="id_no" id="author" value="<?php echo $id; ?>"><br>
		 <h2>COURSE</h2>
        <input type="text" name="course" id="author" value="<?php echo $s_course;?>"><br>
		 <h2 class="pub">EMAIL</h2>
		 <input type="text" name="email" value="<?php echo $s_email;?>"><br>
       <input id="submit" type="submit" value="update" name="button">
    </form>
			</div>
		<?php
		}
}
		
		?>
			</div>
</body>
</html>
