<?php
session_start();
include('database.php');

if(isset($_SESSION['id']))
{
	$s_id=$_SESSION['id'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/s_books.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<div class="cl"></div>
		<div class="menu">
		<hover><a href="student_home_page.php">HOME</a></hover>
		<hover><a href="student_explore_page.php">EXPLORE</a></hover>
				
		<hover><a href="about.php">ABOUT LIBRARY</a></hover>
		<hover><a href="student_profile_page.php">ACCOUNT</a></hover>
		<hover><a href="index.php">LOG OUT</a></hover>
		<a class="cart1" href="book_cart.php">BOOK CART</a>
		</div>
			<div class="container books">
			<h1>ALL BOOK LIST</h1><hr>
					<div class="col-12">
				<?php
//				$b_select="SELECT `b_id`,`b_title`, `b_category`, `b_image` FROM `add_book` order by b_title";
				$b_select="SELECT ab.b_id,ab.b_title, ab.b_category, ab.b_image, ab.b_id, ab.b_price, br.book_id, br.status FROM `add_book` ab 
							 LEFT JOIN book_request br on br.book_id = ab.b_id and br.status = 0 AND br.student_id = $s_id
							ORDER BY ab.b_title";
//						var_dump($b_select);
				$b_statemnt=mysqli_query($con,$b_select);
				
//				var_dump($b_select);
				if(mysqli_num_rows($b_statemnt)>0)
				{
					while($a_book=mysqli_fetch_assoc($b_statemnt))
					{
				?>
			<div class="col-3 book_list">
<!--		<div class="book_1">-->
			<img src="images/books/<?php echo $a_book['b_image'];?>" class="img-fluid">
			<h3><?php echo $a_book['b_title'];?></h3>
			<p><?php echo $a_book['b_category'];?></p>
				<p>$<?php echo $a_book['b_price'];?></p>
			<button <?php if($a_book['book_id'] != ""){ echo  "style='pointer-events: none; background:#afafaf;'"; } ?>>
				<a style="user-select: none;" href="s_book_details.php?b_id=<?php echo $a_book['b_id'];?>"><?php if($a_book['book_id'] != ""){ echo "Requested"; }else{ echo "Borrow";}?></a></button>
			</div>
<!--				</div>-->
					
				<?php 		}
				} ?>
						</div>
			</div>

	</div>
</body>
</html>