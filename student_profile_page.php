<!doctype html>
<?php
session_start();

include('database.php');

$id=$_SESSION['id'];
$s_select="SELECT * FROM `student_signup` where s_lid='$id'";
$s_statement=mysqli_query($con,$s_select);

if(!$s_statement)
{
	echo "error";
}
else
{
	$s_signup_array=array();
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/student_account_page.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid table">
		<?php
		
		$s_reg_data=mysqli_fetch_array($s_statement);
		
		$img=$s_reg_data['s_image'];
		$s_user=$s_reg_data['s_first_name'];
		$s_num=$s_reg_data['s_lid'];
		$s_course=$s_reg_data['s_department'];
		$s_email=$s_reg_data['s_username_email'];
		?>
	<h1>PROFILE</h1>
		<img src="images/profiles/<?php echo $img;?>" class="img-fluid">
		<table style="width:100%">
		<tr>
			<th>USERNAME</th>
			<th>ID NUMBER</th>
			<th>COURCE</th>
			<th>EMAIL</th>
			</tr>
			<tr>
			<td><?php echo $s_user;?></td>
			<td><?php echo $s_num;?></td>
			<td><?php echo $s_course;?></td>
			<td><?php echo $s_email;?></td>
					<hover><a href="s_profile_edit.php?id=<?php echo $s_num;?>" class="edit">EDIT</a></hover>
			</tr>
		</table>
		<div class="cl"></div>
	</div>
</body>
</html>
