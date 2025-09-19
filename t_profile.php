<?php
session_start();

include('database.php');

if(isset($_SESSION['id']))
{
	 $id=$_SESSION['id'];
	
	
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/t_profile.css" rel="stylesheet">
</head>

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
	
}
	?>
<body>
<div class="container-fluid table">
	<h1>PROFILE</h1>
		<img src="images/profiles/<?php echo $image;?>" class="img-fluid">
		<table style="width:100%">
		<tr>
			<th>FIRST NAME</th>
			<th>EMAIL</th>
			<th>AGE</th>
			<th>ADDRESS</th>
			<th>COURCE</th>
			<th>CONTACT</th>
			<th></th>
			</tr>
			<tr>
			<td><?php echo $name;?></td>
			<td><?php echo $email;?></td>
			<td><?php echo $age;?></td>
			<td><?php echo $address;?></td>
			<td><?php echo $cource;?></td>
			<td><?php echo $contact;?></td>
					<td><hover><a href="teacher_profile_edit.php">EDIT</a></hover></td>
			</tr>
		</table>
		<div class="cl"></div>
	</div>
</body>
</html>