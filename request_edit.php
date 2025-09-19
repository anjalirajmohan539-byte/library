<?php

include('database.php');

$id=$_GET['status_id'];

//echo $select;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/request_edit.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<h1>REQUEST EDIT</h1>
	<div class="container details">
		<form action="request_edit_action.php" method="post">
			<?php
			
			$r_details="SELECT `b_title`, `b_price`, `b_image`,`s_first_name`, `s_phone_no` FROM `add_book`ab
                        INNER JOIN book_request br on br.book_id = ab.b_id
                        INNER JOIN student_signup ss ON ss.s_lid = br.student_id
                        WHERE id=$id";
			
			$r_statmnt=mysqli_query($con,$r_details);
			
			if(mysqli_num_rows($r_statmnt)>0)
			{
				while($names=mysqli_fetch_assoc($r_statmnt))
				{

				?>
			
		<div class="col-6 image">
			
			<h3>Book Image</h3>
		<img src="images/books/<?php echo $names['b_image'];?>" class="img-fluid">
		</div>
			
		<div class="col-6 names">
			
			<h3>Student Name</h3>
				<input type="text" name="s_name" class="color" value="<?php echo $names['s_first_name'];?>" readonly>
				
				<h3>Phone No</h3>
				<input type="number" name="phone" class="color" value="<?php echo $names['s_phone_no'];?>" readonly>
			
			<h3>Book Name</h3>
		<input type="text" name="b_name" class="color" value="<?php echo $names['b_title'];?>" readonly>
			
			<h3>Price</h3>
			<input type="number" name="price" class="color" value="<?php echo $names['b_price'];?>" readonly>
			<input type="hidden" name="r_id" value="<?php echo $id;?>">
			<h3>Status<h3>
				<select name="status" id="status">
				<option>Select Option</option>
				<option value="1">Accept</option>
				<option value="2">Reject</option>
				</select>
				
				
				<h3>Return date</h3>
				<input type="date" name="rd"><br>
				<button name="update">UPDATE</button>
		</div>
				
				
				<?php
				
							}
			}
				?>

			</form>
		</div>
	</div>
</body>
</html>