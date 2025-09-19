<?php
session_start();
include('database.php');

$id=$_GET["b_id"];

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
	<link href="css/s_book_details.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<?php
		
		
		$b_select="SELECT `b_id`,`b_title`, `b_author`, `b_category`, `b_publish`,`b_price`, `b_image`, `b_description`, `book_count` FROM `add_book` where b_id=$id";
		$s_statemnt=mysqli_query($con,$b_select);
		

		if(mysqli_num_rows($s_statemnt)>0)
		{
			while($books=mysqli_fetch_assoc($s_statemnt))
			{
				
		
		?>
	<div class="col-12">
		<div class="col-6 imag" style="text-align: center;">
		<img src="images/books/<?php echo $books['b_image'];?>"style="width:30%;">
		</div>
		<div class="col-6 text">
			<h2><?php echo $books['b_title'];?></h2>
			<h3><?php echo $books['b_author'];?></h3>
			<h4><?php echo $books['b_category'];?></h4>
			<h4>$<?php echo $books['b_price'];?></h4>
			<h4>Publish Date : <?php echo $books['b_publish'];?></h4>
			<p><?php echo $books['b_description'];?></p>
			<br>
			
			<form action="s_book_details_ac.php" method="post">
			<button name="button">Request</button>
				<input type="hidden" name="s_id" value="<?php echo $s_id;?>">
				<input type="hidden" name="b_id" value="<?php echo $id;?>">
				<input type="hidden" name="count" value="<?php echo $books['book_count'];?>">
				</form>
		</div>
		</div>
		<div class="cl"></div>
		<?php
			}
		}
		?>
	</div>
</body>
</html>

