<!doctype html>
<?php


include('database.php');

$id=$_GET["book_id"];
$sql = "SELECT * FROM `add_book` WHERE b_id=$id";

	$books_statemnt=mysqli_query($con,$sql);
 

	 $edit_book=mysqli_fetch_assoc($books_statemnt);

$title=$edit_book['b_title'];

?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/book_edit.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid book_form">
			<div class="container form">
				<h1>EDIT BOOK FORM</h1>
	 <form action="book_edit_action.php" method="post" enctype="multipart/form-data">
		 <h2 class="imgg">BOOK IMAGE</h2>
		 <div class="col-6 ">
		<div class="col-12 book_image" style="padding:15px; width: 75%; text-align: center;"><img style="width:65%" src="images/books/<?php echo $edit_book["b_image"];?>"></div>
			 <div class="col-12">
			 <input type="file" id="image" name="image">
			 </div>
			 </div>
		 <input type="hidden" name="id" value="<?php echo $id;?>">
		 <input type="hidden" name="image2" value="<?php echo $edit_book['b_image'];?>">
		 <div class="col-6">
		 <h2 class="ti">TITLE</h2>
        <input type="text" name="title" id="title" value="<?php echo $edit_book['b_title'];?>" placeholder="Title">
        <h2 class="au">AUTHOR</h2>
        <input type="text" name="author" id="author" placeholder="Author" value="<?php echo $edit_book['b_author'];?>"><br>
        <h2 class="gen">GENRE</h2>
		<div class="col-6">
        <select name="category" id="category">
			<option value="select">Select Caregory</option>
            <option value="comedy" <?php if($edit_book['b_category']=="comedy") {?> selected <?php }?>>Comedy</option>
            <option value="thriller" <?php if($edit_book['b_category']=="thriller") {?> selected <?php }?>>Thriller</option>
            <option value="romans" <?php if($edit_book['b_category']=="romans") {?> selected <?php }?>>Romans</option>
            <option value="kids" <?php if($edit_book['b_category']=="kids") {?> selected <?php }?>>Kids</option>
			<option value="other" <?php if($edit_book['b_category']=="other") {?> selected <?php }?>>Other</option>
        </select>
			</div>
			 <div class="col-6 price">
			 <h2 class="pr">PRICE</h2>
			 <input type="number" id="number" name="price" value="<?php echo $edit_book["b_price"];?>">
				 </div> 
			 <h2>DESCRIPTION</h2>
			 <textarea class="des"  name="des"><?php echo $edit_book['b_description'];?></textarea>
			 
		 <h2 class="pub">PUBLISHED DATE</h2>
		 <input type="date" name="date" placeholder="Published date" value="<?php echo $edit_book['b_publish'] ?>"><br>
       <input id="submit" type="submit" value="Update" name="button">
    </form>
			</div>

			</div>
		</div>
</body>
</html>