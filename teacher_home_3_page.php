<?php
include('database.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/teacher_home_3_page.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
	<img id="logo" src="images/logo.png">
		<h4>OUR BOOK WORLD</h4>
		<h1>EDIT CLASS</h1>
		<div class="col-6 table">
			<h2 class="overall_g">STUDENT LIST</h2>
		<table style="width:100%">
  <tr>
    <th>FIRSTNAME</th>
	  <th>LASTNAME</th>
	  <th>PHONE NO</th>
    <th>CLASS/BLOCK</th>
	
	  <th></th>
  </tr>
			
			<?php
			
			$s_select="SELECT  `s_id`, `s_first_name`, `s_last_name`, `s_phone_no`, `s_class` FROM `student_signup` order by s_first_name";
			$s_statemnt=mysqli_query($con,$s_select);
			
//			var_dump($s_select);
			if(mysqli_num_rows($s_statemnt)>0)
			{
				while($student=mysqli_fetch_assoc($s_statemnt))
				{
					
			
			
			?>
  <tr>
    <td><?php echo $student['s_first_name'];?></td>
	<td><?php echo $student['s_last_name'];?></td>
	  <td><?php echo $student['s_phone_no'];?></td>
    <td><?php echo $student['s_class'];?></td>
	  
	  <td><a href="tt.php?s_id=<?php echo $student['s_id'];?>">EDIT</a></td>
  </tr>
	<?php 	}
			} ?>		
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
