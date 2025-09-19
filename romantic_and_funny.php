<?php

include('database.php');

?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/funny_and_romantic.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<img class="banner_img_1" src="images/book_set_1.png">
		<h1>FUNNIEST AND ROMANCE</h1>
		<img class="banner_img_2" src="images/book_set.png">
		</div>
		<div class="cl"></div>
	<div class="container books_collection">
	<h2>COMEDY AND ROMANCE BOOKS</h2><hr>
		<div class="col-12">
		<?php
		$cbooks_select="SELECT `b_title`, `b_category`, `b_price`, `b_image` FROM `add_book` WHERE b_category='comedy' or b_category='romans'";
		$cb_statemnt=mysqli_query($con,$cbooks_select);
		
		
		if(mysqli_num_rows($cb_statemnt)>0)
		{
			while($category=mysqli_fetch_assoc($cb_statemnt))
			{
		?>
		
		<div class="col-3 book_section_1">
		
			<img src="images/books/<?php echo $category['b_image'];?>">
			<h3><?php echo $category['b_title'];?></h3>
			<h4><?php echo $category['b_category'];?></h4>
			<p>$<?php echo $category['b_price']?></p>
			
		</div>
		
		<?php 	}
		} ?>
		
</div>
	</div>
</body>
</html>