<?php
include('database.php');

if(isset($_POST['button']))
{
	$image=$_FILES['image']['name'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$price=$_POST['rate'];
	$count=$_POST['count'];
	$des=$_POST['des'];
	$category=$_POST['category'];
	$publish=$_POST['date'];
	
	
	$select_books="SELECT b_id FROM `add_book` WHERE b_title='$title' AND b_author='$author'";
	

	if (!$book_statemnt=mysqli_query($con,$select_books))
	{
		echo "error";
	}
	else 
	{
		if(mysqli_num_rows($book_statemnt)>0)
		{
			echo "exist";
		}
		else
		{
//			$insert_books="INSERT INTO `add_book`(`b_title`, `b_author`, `b_category`, `b_publish`, `b_image`,  `b_price`, `b_description`, `book_count`) VALUES ('$title','$author','$category','$publish','$image',$price,'$des',$count)";
			
			$insert_books="INSERT INTO `add_book`(`b_title`, `b_author`, `b_category`, `b_publish`, `b_image`,  `b_price`, `b_description`, `book_count`) VALUES (?,?,?,?,?,?,?,?)";
			var_dump($insert_books);
			
			$stmt=$con->prepare($insert_books);
			$stmt->bind_param("sssssisi",$title,$author,$category,$publish,$image,$price,$des,$count);
			if(!$stmt->execute())
			{
				echo "error";
			}

			else
			{
				$book_path="images/books/";
				$book_image=$book_path.basename($image);
				if(move_uploaded_file($_FILES['image']['tmp_name'],$book_image))
				{
					echo "file uplode";
				}
				else
				{
					echo "something is else";
				}
			}
		}
	}
}
?>