<?php

include('database.php');



if(isset($_GET['status']))
{
	$status=$_GET['status'];
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/admin_request.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<?php
		switch($status)
{
	case 0:
		echo "<h1>REQUEST BOOKS</h1>";
		break;
	case 1:
		echo "<h1>BOOK APPROVED</h1>";
		break;
	case 2:
		echo "<h1>BOOKS REJECTED</h1>";
		break;
	default:
		echo "error";
		break;
}
		?>
		<hr>
	<div class="container table">
		<table width="100%">
		<tr>
			<th>BOOK IMAGE</th>
			<th>BOOK NAME</th>
			<th>PRICE</th>
			<th>STATUS</th>
			<th>REQUEST DATE</th>
			<th>APPROVE DATE</th>
			<th>RETURN DATE</th>
			<th>STUDENT NAME</th>
			<th>PHONE NO</th>
			<th></th>
			</tr>
			
			<?php
			
			$select="SELECT `id`, `b_title`, `b_price`, `b_image`,`s_first_name`, `s_phone_no`,`requested_date`,`approve_date`,`return_date`,
                     CASE WHEN status = 0 then 'Requested'
                          WHEN status = 1 then 'Approved'
                          WHEN status = 2 then 'Rejected'
                     END AS status
                     FROM `add_book`ab
                    INNER JOIN book_request br ON br.book_id = ab.b_id 
                    INNER JOIN student_signup st ON st.s_lid = br.student_id
					where status=$status";
//			var_dump($select);
			
			$book_statemnt=mysqli_query($con,$select);
			
			if(mysqli_num_rows($book_statemnt)>0)
			{
				while($details=mysqli_fetch_assoc($book_statemnt))
				{
					$date=$details['requested_date'];
					$date2=date_create($date);
					
					$approve_date=$details['approve_date'] != "" ? date_create($details['approve_date']) : "";
					
					$return_date=$details['return_date'] != "" ? date_create($details['return_date']) : "";
//					var_dump($date2) ;
			?>
			<tr>
			<td><img src="images/books/<?php echo $details['b_image'];?>" class="img-fluid"></td>
			<td><?php echo $details['b_title'];?></td>
			<td>$<?php echo $details['b_price'];?></td>
			<td><?php echo $details['status'];?></td>
				
			<td><?php echo date_format($date2,"d/m/Y");?></td>
			<td><?php echo $details['approve_date'] != "" ? date_format($approve_date,"d/m/Y") : "NILL";?></td>
			<td><?php echo $details['return_date'] != "" ? date_format($return_date,"d/m/Y") : "NILL";?></td>
				
			<td><?php echo $details['s_first_name'];?></td>
			<td><?php echo $details['s_phone_no'];?></td>
			<td><a style="background-color:black;" href="request_edit.php?status_id=<?php echo $details['id'];?>">EDIT</a></td>
			</tr>
			<?php
					}
			}
			?>
		</table>
		</div>
	</div>
</body>
</html>