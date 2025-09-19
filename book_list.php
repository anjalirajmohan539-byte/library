<?php

include('database.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/book_list.css" rel="stylesheet">
</head>

<body>
		<div class="container-fluid banner_image">	
	<div class="container">
		<div class="col-3 logo">
		<img src="images/logo.png">
		</div>
		<div class="cl"></div>
			<div class="banner_title">
			<h1>OUR BOOKS</h1>
				<p>READ AND LEARN</p>
				<a href="all_books.php">TOTAL BOOKS</a>
				<a href="admin_recent_activities.php">RECENDLY ADD</a>
				<b><a href="book_add.php">ADD BOOK</a></b>
			</div>
		</div>
	</div>
	<div class="cl"></div>
	<div class="container book_lists">
	<h1>BOOK LISTS :</h1>
		
		<?php
		
		$b_select="SELECT  `b_title`, `b_author`, `b_category`, `b_price`, `b_image`, `b_description` FROM `add_book` order by b_title";
		$b_satemnt=mysqli_query($con,$b_select);
		 
		if(mysqli_num_rows($b_satemnt)>0)
		{
			while($books_d=mysqli_fetch_assoc($b_satemnt))
			{
				
		
		
		?>
		<div class="banner_half">
			<div class="col-4">
			<img src="images/books/<?php echo $books_d['b_image'];?>">
				</div>
			
			<div class="col-8 name">
			<h2><?php echo $books_d['b_title'];?></h2>
			<h3><?php echo $books_d['b_author'];?></h3>
			<h3><?php echo $books_d['b_category'];?></h3>
			<p><?php echo $books_d['b_description'];?></p><br>
			<h5>$<?php echo $books_d['b_price'];?></h5>
				</div>
		</div>
		<div class="cl"></div>
		<?php 	}
		} ?>
		
		
		<div class="cl"></div>
	</div>
	
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
		<img id="logo_img" src="images/logo.png">
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
