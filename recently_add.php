<?php

include('database.php');


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/recently_add.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<div class="col-3 logo">
		<img src="images/logo.png">
		</div>
	<div class="container books">
		<h1>RECENTY ADDED BOOKS</h1>
		
		
		<?php
		$b_select="SELECT `b_title`, `b_price`, `b_image`, `b_description` FROM `add_book` order by b_title asc";
		$b_statemnt=mysqli_query($con,$b_select);
		
		
		if(mysqli_num_rows($b_statemnt)>0)
		{
			while($books=mysqli_fetch_assoc($b_statemnt))
			{
		
		?>
		
		
				<div class="banner_half">
			<img src="images/books/<?php echo $books['b_image'];?>">
				<h6>$<?php echo $books['b_price'];?></h6>
			<h2><?php echo $books['b_title'];?></h2>
			<p><?php echo $books['b_description'];?></p>
		</div>
		<div class="cl"></div>
		<?php 	}
		} ?>
		</div>
		
	</div>
</body>
</html>
