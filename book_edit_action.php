<?php
include('database.php');

if(isset($_POST["button"]))
{
	$image=$_FILES['image']['name'];
	$des=$_POST['des'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$category=$_POST['category'];
	$publish=$_POST['date'];
	$price=$_POST['price'];
    $id=$_POST['id'];
	$image2=$_POST['image2'];
	

	
	if($image=="")
	{
		 $hid_img=$image2;
	}
	else
	{
		$hid_img=$image;
	}

	$update_book="UPDATE `add_book` SET `b_title`='$title',`b_author`='$author',`b_category`='$category',`b_publish`='$publish',`b_price`='$price',`b_image`='$hid_img',`b_description`='$des' WHERE b_id=$id";
	
	var_dump($update_book);
	if(!$update_statement=mysqli_query($con,$update_book))
	{
		echo "error1";
	}
	else
	{
			if($image !="")
				{
				$pic="images/books/";
				$s_pic=$pic.basename($image);
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$s_pic))
					
				{
					echo "upload";
				}
				else
				{
					echo "error33";
				}
				}
		header('location:all_books.php');
	}
}
?>