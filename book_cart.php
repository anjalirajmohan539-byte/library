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
	<link href="css/book_cart.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<h1>MY CART</h1>
		<div class="container books">
			<div class="menu">
		<hover><a href="s_books.php">BACK</a></hover>
		<hover><a href="s_fine_student.php">DUE LIST</a></hover>
		</div>
			<div class="col-12">
		<table width="100%">
		<tr>
			<th>PRODUCT</th>
			<th>PRODUCT DETAILS</th>
			<th>PRICE</th>
			<th>STATUS</th>
			<th>REQUESTED DATE</th>
			<th>APPROVE DATE</th>
			<th>RETURN DATE</th>
			</tr>
			<tr>	
			<?php
			$book_select="SELECT `id`,`b_title`, `b_author`, `b_category`, `b_price`, `b_image`,`requested_date`,`approve_date`,`return_date`,
			              CASE when status = 0 THEN 'Requested' 
                               when status = 1 THEN 'Approved'
                               when status = 2 THEN 'Rejected'
                          END AS status , status as status_id
                          FROM `add_book` ad
                          INNER JOIN book_request br on br.book_id = ad.b_id 
						  where student_id = $s_id AND fine=0
                          order by id desc";

			$b_statemnt=mysqli_query($con,$book_select);
			
//				var_dump($book_select);
			if(mysqli_num_rows($b_statemnt)>0)
			{

				while($books=mysqli_fetch_assoc($b_statemnt))
				{
					$date=$books['requested_date'];
					
					$date2=date_create($date);
//					var_dump($date2) ;
					
					$approve_date=$books['approve_date'] != "" ? date_create($books['approve_date']) : "";

					$return_date=$books['return_date'] != "" ? date_create($books['return_date']) : "";
					
					
                   
//					echo $days;	
					
			?>	
			
			<td><img src="images/books/<?php echo $books['b_image'];?>"></td>
				<td>
			<h3><?php echo $books['b_title'];?></h3>
			<br>
			<p1><?php echo $books['b_author'];?></p1><br>
			<p2><?php echo $books['b_category'];?></p2>
			</td>
			<td>$<?php echo $books['b_price'];?></td>
			<td><?php echo $books['status'];?></td>
			<td><?php echo date_format($date2,"d/m/Y");?></td>
			<td><?php echo $books['approve_date'] != "" ? date_format($approve_date,"d/m/Y") : "NILL";?></td>
			<td><?php echo $books['return_date'] != "" ? date_format($return_date,"d/m/Y") : "NILL";?></td>
			</tr>
							<?php
			}
			}
		?>

		</table>
				</div>
	</div>
		</div>
</body>
</html>