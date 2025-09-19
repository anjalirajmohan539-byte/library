<?php
include('database.php');

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/student_books.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<img class="banner_img_1" src="images/book_set_1.png">
		<h1>STUDENTS MATERIALS</h1>
		<img class="banner_img_2" src="images/book_set.png">
		</div>
		<div class="cl"></div>
	<div class="container books_collection">
	<h2>ALL SUBJECT BOOKS :</h2><hr>
		
		<?php
		$s_select="SELECT `b_title`, `b_category`, `b_price`, `b_image` FROM `add_book` WHERE b_category='kids'";
		$scate_staemnt=mysqli_query($con,$s_select);
		
		if(mysqli_num_rows($scate_staemnt)>0)
		{
			while($kid=mysqli_fetch_assoc($scate_staemnt))
			{
				
		
		
		?>
		<div class="book_section_1">
		<div class="col-3">
			<img src="images/books/<?php echo $kid['b_image'];?>">
			<h3><?php echo $kid['b_title'];?></h3>
			<h4><?php echo $kid['b_category'];?></h4>
			<p>$<?php echo $kid['b_price'];?></p>
			</div>
			
			<?php 	}
		} ?>
	</div>
</body>
</html>
