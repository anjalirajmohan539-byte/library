<?php

include('database.php');

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/thriller.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<div class="container">
		<div class="col-3 logo">
		<img src="images/logo.png">
		</div>
			</div>
		<h1>THRILLER AND HORROR BOOKS</h1>
		</div>
		<div class="cl"></div>
		<div class="container books_collections">
		<h2>ALL THRILLER BOOKS LIST</h2><hr>
			
			<?php
			
			$tbooks_select="SELECT `b_title`, `b_category`, `b_price`, `b_image` FROM `add_book` WHERE b_category='thriller' OR b_category='other'";
			$tb_statemnt=mysqli_query($con,$tbooks_select);
			
			
			
			
			if(mysqli_num_rows($tb_statemnt)>0)
			{
				while($cate=mysqli_fetch_assoc($tb_statemnt))
				{
					
			
			
			
			?>
			
			
			
			<div class="col-3 book_9">
		<img src="images/books/<?php echo $cate['b_image'];?>">
			<h3><?php echo $cate['b_title'];?></h3>
				<h4><?php echo $cate['b_category'];?></h4>
			<p><?php echo $cate['b_price']?></p>
		</div>
			<?php 	}
			} ?>
			
	</div>
</body>
</html>
