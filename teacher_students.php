<?php
include('database.php');
$s_select="SELECT   `s_first_name`, `s_username_email`,  `s_phone_no`, `s_class` FROM `student_signup` ";
if(isset($_POST['submit']))
{
	$name=$_POST['search_name'];
	if($name != "")
	{
		$s_select=$s_select. "WHERE s_first_name like '%$name%'";
	}
	
}

	
$s_statemnt=mysqli_query($con,$s_select);

//$s='hello';
//$a=2;
//$b=1;
//
//if($a!=$b)
//{
//	$s=$s.'world';
//}
//
//echo $s;



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/teacher_students.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
	<img id="logo" src="images/logo.png">
		<h4>OUR BOOK WORLD</h4>
		<form action="#" method="post">
		<input id="search" type="text" name="search_name" placeholder="Search">
			<input id="enter_1" type="submit" name="submit">
		</form>
		
		<h1>MANAGEMENT STUDENTS</h1>
		<table style="width:100%">
			 <tr>
    <th>USERNAME</th>
    <th>CLASS/BLOCK</th>
	<th>EMAIL</th>
	<th>PHONE NO</th>
  </tr>
	<?php 
			if(mysqli_num_rows($s_statemnt)>0)
{
	while($data=mysqli_fetch_assoc($s_statemnt))
	{
		

			?>		
  <tr>
    <td><?php echo $data['s_first_name'];?></td>
    <td><?php echo $data['s_class'];?></td>
	  <td><?php echo $data['s_username_email'];?></td>
	  <td><?php echo $data['s_phone_no'];?></td>
  </tr>
  <?php 	}
} ?>
</table>
		
	
	
		</div>
	
</body>
</html>
