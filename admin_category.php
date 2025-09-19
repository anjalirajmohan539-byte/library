<?php
include('database.php');
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/admin_category.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
	<div class="container">
		<div class="col-3 logo">
		<img src="images/logo.png">
		</div>
		</div>
		<h1>BOOK CATEGORIES</h1>
		</div>
		<div class="cl"></div>
	   
					<?php
			
			$book="SELECT  `b_title`, `b_category`, `b_price`,`b_author`, `b_image` FROM `add_book` where b_category='comedy' or b_category='romans'";
			$book_statemmnt=mysqli_query($con,$book);
			
			if(mysqli_num_rows($book_statemmnt)>0)
			{
				?>
	 <div class="container categorys">
		<h2 class="text">FUNNIEST AND ROMANCE :</h2>
		 <a href="romantic_and_funny.php"><img id="arrow_1" src="images/arrow (2).png"></a>
			<?php
			
	
				while($tbooks=mysqli_fetch_assoc($book_statemmnt))
				{
					
			?>
		
		<div class="col-3 book_9">
		<img src="images/books/<?php echo $tbooks['b_image'];?>">
			<h3><?php echo $tbooks['b_title'];?></h3>
			<h4><?php echo $tbooks['b_author']?></h4>
			<h4><?php echo $tbooks['b_category'];?></h4>
			<p><?php echo $tbooks['b_price'];?></p>
		</div>
		
			<?php		}
				
				?>
		  </div>
				<div class="cl"></div>
	
	
	
	
	<?php }
	$book2="SELECT  `b_title`, `b_category`, `b_price`,`b_author`, `b_image` FROM `add_book` where b_category='thriller' or b_category='other'";
	$book_statemmnt2=mysqli_query($con,$book2);
	
	if(mysqli_num_rows($book_statemmnt2)>0)
			{
		
	?>
		<div class="container categorys_1">
		
			<h2 class="text_1">THRILLER AND HORROR :</h2>	
		<a href="thriller_books.php"><img id="arrow_2" src="images/arrow (2).png"></a>
			
		<?php
			
				while($tbook=mysqli_fetch_assoc($book_statemmnt2))
				{
			
			?>
		<div class="col-3 book_9">
		<img src="images/books/<?php echo $tbook['b_image'];?>">
			<h3><?php echo $tbook['b_title'];?></h3>
			<h4><?php echo $tbook['b_author']?></h4>
			<h4><?php echo $tbook['b_category'];?></h4>
			<p><?php echo $tbook['b_price'];?></p>
		</div>
	<?php
						}
		} 
	?>
			</div>
				<div class="cl"></div>
	
	
	
	
	
	
	<?php
	$book3="SELECT  `b_title`, `b_category`, `b_price`, `b_author`, `b_image` FROM `add_book` where b_category='kids'";
	$book_statemmnt3=mysqli_query($con,$book3);
		
		if(mysqli_num_rows($book_statemmnt3)>0)
		{
			
	?>
	<div class="container categorys_2">
		<h2 class="text_1">STUDENTS MATERIALS :</h2>
		<a href="students_books.php"><img id="arrow_2" src="images/arrow (2).png"></a>
		
		<?php
		while($sbook=mysqli_fetch_assoc($book_statemmnt3))
		{
			
		?>
			<div class="col-3 book_9">
		<img src="images/books/<?php echo $sbook['b_image'];?>">
			<h3><?php echo $sbook['b_title'];?></h3>
			<h4><?php echo $sbook['b_author']?></h4>
			<h4><?php echo $sbook['b_category'];?></h4>
			<p><?php echo $sbook['b_price'];?></p>
		</div>
	</div>
	<?php }
	}
	?>

</body>
</html>
