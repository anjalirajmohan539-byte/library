<?php
include('database.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>s_explore</title>
	<link href="css/student_explore_page.css" rel="stylesheet">
	
</head>

<body>
	<div class="container-fluid banner">
	<img id="logo" src="images/logo.png">
		<div class="menu">
		<hover><a href="index.php">LOG OUT</a></hover>
		</div>
		<h4>OUR BOOK WORLD</h4>
		<div class="container-fluid banner_text">
			<img class="banner_img_1" src="images/book_set_1.png">
		<h1>EXPLORE</h1>
			<img class="banner_img_2" src="images/book_set_2.png">
		</div>
		</div>
		<div class="cl"></div>
		<div class="container book_rating">
			<h1>BOOK RATING :</h1>
			<div class="col-12 books">
			<?php
				$b_select="SELECT  `b_title`, `b_category`, `b_publish`, `b_image`, `b_price` FROM `add_book` order by b_id desc";
				$b_statemnt=mysqli_query($con,$b_select);
				
				
				if(mysqli_num_rows($b_statemnt)>0)
				{
					while($books=mysqli_fetch_assoc($b_statemnt))
					{
						
				
				?>
			
				<div class="col-6 banner_half">
			<img class="image" src="images/books/<?php echo $books["b_image"];?>">
				<h6><?php echo $books["b_category"];?></h6>
				<h2><?php echo $books["b_title"];?></h2>
				<p><?php echo $books["b_publish"];?></p>
				<p><?php echo $books["b_price"];?></p>
				<img class="stars" src="images/golden_star.png">
			<img class="stars" src="images/golden_star.png">
			<img class="stars" src="images/golden_star.png">
			<img class="stars" src="images/golden_star.png">
		</div>

				
			<?php 	}
				}?>
				</div>

		</div>
	<div class="cl"></div>
		<div class="container study_material">
			<h1>STUDENTS BOOKS :</h1>
			<?php
			$b_select2="SELECT  `b_title`, `b_category`, `b_image` FROM `add_book` WHERE b_category='kids'";
			$b_statemnt2=mysqli_query($con,$b_select2);
			
			
			if(mysqli_num_rows($b_statemnt2)>0)
			{
				while($book=mysqli_fetch_assoc($b_statemnt2))
				{
					
			
			
			?>
		<div class="col-3 h_1">
			<img src="images/books/<?php echo $book['b_image'];?>">
			<h2><?php echo $book['b_title'];?></h2>
			<h3><?php echo $book['b_category']?></h3>
			</div>
		</div>
		<div class="cl"></div>
	
	
	<?php 	}
			} ?>
	
	<div class="container author">
		<h1>AUTHORS</h1><hr>
		<p>Start with research Begin by conducting thorough research on the author, reading their other works, and looking <br>for biographical information that can provide insights into their life and career. This willhelp you gain <br> a deeper understanding of the author's background, inspirations, and writing style.</p>
	<div class="col-3">
		<img src="images/j.k.rowling.jpg">
		<h2>J.K.ROWLING</h2>
		<h4>38 Published books</h4>
		</div>
	<div class="col-3">
		<img src="images/ian_fleming.jpg">
		<h2>IAN FLEMING</h2>
		<h4>46 Published books</h4>
		</div>
	<div class="col-3">
		<img src="images/olivia-laing.jpg">
		<h2>OLIVIA LAING</h2>
		<h4>31 Published books</h4>
		</div>
	<div class="col-3">
		<img src="images/james patterson.jpg">
		<h2>JAMES PATTERSON</h2>
		<h4>51 Published books</h4>
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
