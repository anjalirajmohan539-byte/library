<!doctype html>
<?php
include('database.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/books.css" rel="stylesheet">
</head>

<body>
		<div class="container-fluid banner_image">	
			<a href="#"><img id="arrow" src="images/arrow_3_1_w.png"></a>
	<div class="container">
		<div class="col-3 logo">
		<img src="images/logo.png">
		</div>
		<div class="cl"></div>
			<div class="banner_title">
			<h1>ALL BOOKS LISTS</h1>
				<p>READ AND LEARN</p>
			</div>
		</div>
	</div>
	<div class="cl"></div>
	<div class="container-fluid books">
	<div class="container book_lists">
	<h1>BOOK LISTS :</h1>
		<table width="100%">
		<tr>
			<th>IMAGE</th>
			<th>TITLE</th>
			<th>AUTHOR</th>
			<th>GENRE</th>
			<th class="nu">PRICE</th>
			<th>PUBLISHED DATE</th>
			
			</tr>

			
				<?php
				$book="SELECT * FROM `add_book` order by b_id desc";
				$book_select=mysqli_query($con,$book);
				
				if(mysqli_num_rows($book_select)>0)
				{
					while($edit_book=mysqli_fetch_assoc($book_select))
					{
						?>
			<tr class="book_space">
				<td class="book_list_style"><img style="width:24%;" src="images/books/<?php echo $edit_book["b_image"];?>"></td>
				<td class="book_list_style"><?php echo $edit_book["b_title"];?></td>
				<td class="book_list_style"><?php echo $edit_book["b_author"];?></td>
				<td class="book_list_style"><?php echo $edit_book["b_category"];?></td>
				<td class="book_list_style"><?php echo $edit_book["b_price"];?></td>
				<td class="book_list_style"><?php echo $edit_book["b_publish"];?></td>
				<td><a href="book_edit.php?book_id=<?php echo $edit_book["b_id"];?>">Edit</a></td>
				</tr>
			<br>
				<?php
					}
				}
				?>
	
			
		</table>
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
