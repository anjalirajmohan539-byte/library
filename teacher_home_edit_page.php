<?php

include('database.php');


$id=$_GET['s_id'];
 
$s_select="SELECT  `s_lid`, `s_image`, `s_first_name`, `s_last_name`, `s_phone_no`, `s_class` FROM `student_signup` WHERE s_id=$id";
$s_statemnt=mysqli_query($con,$s_select);


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/teacher_home_edit_page.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
	<h1>EDIT CLASS</h1>
		
		
		<div class="container create_list">
		<form action="class_edit_action.php" method="post">	
			<?php
			
			if(mysqli_num_rows($s_statemnt)>0)
{
	$s_name=mysqli_fetch_assoc($s_statemnt);
	

			?>
			<div class="col-12 section">
			<div class="col-6 ">
				<img src="images/profiles/<?php echo $s_name['s_image'];?>" class="img-fluid">
				</div>
				<div class="col-6">
					<div class="col-12">
						<div class="col-12 ">
							<h3>FIRST NAME</h3>
							<input type="text" name="firstname" class="name color" value="<?php echo $s_name['s_first_name'];?>" readonly>
						</div>
						<div class="col-12">
							<h3>LAST NAME</h3>
							<input type="text" name="lastname" class="name color" value="<?php echo $s_name['s_last_name'];?>" readonly>
							<input type="hidden" name="s_id" value="<?php echo $s_name['s_lid'];?>">
						</div>
		
						<div class="col-12">
							<h3>PHONE NO</h3>
							<input type="number" name="phoneno" class="name color" value="<?php echo $s_name['s_phone_no'];?>" readonly>
						</div>
						<div class="col-12">
							<h3>CLASS</h3>
							<input type="text" name="class" class="name" value="<?php echo $s_name['s_class'];?>">
						</div>					
					</div>
					<div class="col-12 button">
						<div class="col-12">
							<input type="submit" name="submit" class="sub" value="UPDATE">
							
						</div>
						<div class="col-12">
							<button class="sub"><a href="teacher_home_3_page.php">BACK</a></button>
						</div>					
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="cl"></div>
				</form>
		</div>
	</div>
</body>
</html>
