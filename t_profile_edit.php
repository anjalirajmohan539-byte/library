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
	<link href="css/my_profile.css" rel="stylesheet">
</head>

<body>
	
	<?php
		$t_select="SELECT * FROM `teacher_signup` WHERE t_lid=$id";
	$t_statement=mysqli_query($con,$t_select);
	
	if(!$t_statement)
	{
		echo "error";
	}
else
{
	
	$t_detail=mysqli_fetch_array($t_statement);
	
	$image=$t_detail['t_images'];
	 $name=$t_detail['t_full_name'];
	$address=$t_detail['address'];
	$age=$t_detail['t_age'];
	$email=$t_detail['email'];
	$contact=$t_detail['t_phone_no'];
	$cource=$t_detail['t_class'];
	
	?>
		<div class="container-fluid table">
			<h1>PROFILE</h1>
			<div class="cl"></div>
			<div class="container banner">
			<form action="t_profile_edit_action.php" method="post" enctype="multipart/form-data">
				<h5 class="per">Personal Information <b>*</b></h5>


				<div class="image">
					<h4>Recent Photo</h4>
					<img src="images/profiles/<?php echo $image;?>" style="width:25%;">
				<input type="file" name="image" id="img">
					<input type="hidden" name="image2" value="<?php echo $image;?>">
				</div>


				<div class="col-6 f_n">
					<h3>Full Name</h3>
					<input id="name" type="text" name="name1" value="<?php echo $name;?>">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					</div>


				<div class="col-6 age">
					<h2>Age <b>*</b></h2>
				<input type="number" name="age" id="age" placeholder="eg.23" value="<?php echo $age;?>">
				</div>



				<div class="col-6 address">
				<h2>Address</h2>
				<textarea name="add" id="address"><?php echo $address;?></textarea>
				</div>


				<div class="col-6 e">
					<h2>Email <b>*</b></h2>
				<input id="email" type="email" name="email" placeholder="eg.example234@gmail.com" value="<?php echo $email;?>">
				</div>


				<div class="col-6 ph">
					<h2>Contact <b>*</b></h2>
				<input id="number" type="number" name="number" value="<?php echo $contact;?>">
					<h5 class="phno">please enter the valid phone number</h5>
				</div>

				<div class="col-6 cource">
					<h2>Cource <b>*</b></h2>
				<input id="cource"  type="text" name="cource" value="<?php echo $cource;?>">
				</div>

				<br>
					<ul class="tik">
					<li>
						<input type="checkbox" id="satement">
				<label id="box" for="satement">
					<p class="rrr">I agree to <c>Term and Conditions.</c><b> *</b></p>
				</label>
						</li>
					</ul>



				<div class="sub">
				<input type="submit" name="submit" id="sub">
				</div>
			</form>
		</div>
			</div>

	<?php } }?>
</body>
</html>
