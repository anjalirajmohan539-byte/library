<?php
include('database.php');

$t_select="SELECT `t_lid`, `t_full_name`,  `email`,  `t_phone_no`, `t_class` FROM `teacher_signup`";


if(isset($_POST['submit']))
{
	$name=$_POST['search_name'];
	
	if($name !="")
	{
		$t_select=$t_select." WHERE t_full_name like '%$name%'";
		
	}
} 
$t_statemnt=mysqli_query($con,$t_select);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>T_DASHBOARD</title>
	<link href="css/teacher_home_2_page.css" rel="stylesheet">
</head>

<body>
	<div class="container_fluid student_banner">
		<img id="logo" src="images/logo.png">
		<h4>OUR BOOK WORLD</h4>
		<form action="#" method="post">
		<input id="search" type="text" name="search_name" placeholder="Search">
			<input id="enter_1" name="submit" type="submit" placeholder="Enter">
		</form>
		<h1>DASHBOARD</h1>
	<div class="cl"></div>
	<div class="container overall">
	<div class="col-6 overall_1">
		<h2><img class="img_1" src="images/book_set_3.png">ALL DETAILS</h2><hr>
		<div class="col-3 users">
			<h5>ALL USERS</h5>
		<h3>760</h3>
		<p>last month</p>
			</div>
		<div class="col-3 s_details">
			<h5>STUDENTS DETAILS</h5>
		<h3>360</h3>
		<p>last month</p>
			</div>
			<div class="col-3 issue">
				<h5>ISSUE BOOKS</h5>
		<h3>220</h3>
		<p>last month</p>
				</div>
		<div class="col-3 list">
			<h5>BOOK LISTS</h5>
		<h3>160</h3>
		<p>last month</p>
			</div>
		</div>
	</div>
	<div class="cl"></div>
	<div class="col-6 report" >
		<img src="images/report_Edit.png" class="img-fluid">
		</div>
		<div class="cl"></div>
		<div class="col-6 table">
			<h2 class="overall_g">STUDENT STATISTICS</h2>
			<a href="teacher_home_edit_page.php"><img src="images/edit_png.png"></a>
		<table style="width:100%">
  <tr>
    <th>USERNAME</th>
    <th>CLASS/BLOCK</th>
    <th>ID</th>
	<th>EMAIL</th>
	<th>PHONE NO</th>
  </tr>
			
			<?php
			
			if(mysqli_num_rows($t_statemnt)>0)
			{
				
				while($details=mysqli_fetch_assoc($t_statemnt))
				{

			?>
  <tr>
    <td><?php echo $details['t_full_name'];?></td>
    <td><?php echo $details['t_class'];?></td>
	  <td><?php echo $details['t_lid'];?></td>
	  <td><?php echo $details['email'];?></td>
	  <td><?php echo $details['t_phone_no'];?></td>
  </tr>
			<?php } }?>
</table>
			
		</div>
		</div>
	
		<div class="cl"></div>
	<div class="container-fluid newsletter">
		<img class="book_icon_2" src="images/book_set_3.png">
	<div class="container">
		<div class="col-6 text">
		<p>Subscribe our newsletter for newest books updates</p>
			</div>
		<div class="col-6 email">
		<form action="#" method="post">
		<input type="email" name="email" placeholder="Enter your email">
			<input id="enter" type="button" value="Enter">
		</form>
			</div>
		</div>
	</div>
	<div class="cl"></div>
	<div class="container_fluid footer">
		<div class="col-3 logo">
		<img class="logo_img" src="images/logo.png">
			<h1>OUR BOOK WORLD</h1>
			<p>By actively listening to patrons and implementing their suggestions,libraries can create a more responsive, engaging, and effective </p>
			<img id="facebook" src="images/facebook.png" class="img-fluid">
			<img id="instagram" src="images/instagram.png" class="img-fluid">
			<img id="youtube" src="images/youtube.png" class="img-fluid">
			<img id="twitter" src="images/twitter.png" class="img-fluid">
		</div>
		<div class="col-3 link">
		<h2>OUR LINKS</h2>
			<h3>About Us <img src="images/arrow_y.png"></h3>
			<h3>Contact Us <img src="images/arrow_y.png"></h3>
			<h3>Pricing Table <img src="images/arrow_y.png"></h3>
			<h3>Privacy Policy <img src="images/arrow_y.png"></h3>
			<h3>FAQ <img src="images/arrow_y.png"></h3>
		</div>
		<div class="col-3 resource">
		<h2>RESOURCE</h2>
			<h3>Download <img src="images/arrow_y.png"></h3>
			<h3>Help Center <img src="images/arrow_y.png"></h3>
			<h3>Service <img src="images/arrow_y.png"></h3>
			<h3>Shop Cart <img src="images/arrow_y.png"></h3>
			<h3>Login <img src="images/arrow_y.png"></h3>
		</div>
		<div class="col-3 contact">
		<h1>Get in Touch with Us</h1>
			<h3><img src="images/location.png">Thrissur ,west fort</h3>
			<h3><img src="images/call.png">+123 345123 556</h3>
			<h3><img src="images/MAIL.png">support@bookworld.com</h3>
		</div>
	</div>
	<div class="cl"></div>
	<div class="container-fluid last_footer">
	<p>Our Book World - 2025 All Rights Reserved</p>
	</div>
	
	
	
	
	
	
	
	
	
	
</body>
</html>
