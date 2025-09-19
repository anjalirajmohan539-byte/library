<?php
session_start();
include('database.php');

if(isset($_SESSION['id']))
{
	$s_id=$_SESSION['id'];
	$id=$_SESSION['id'];
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/s_fine_student.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<h1>DUE LIST</h1>
		<div class="cl"></div>
		<div class="container books">
			<div class="menu">
		<hover><a href="s_books.php">BACK</a></hover>
				</div>
				<div class="col-12">
					<?php
						$book_select="SELECT `b_title`, `b_price`, `b_image`,`requested_date`,`approve_date`,`return_date`,
                              CASE  when status = 1 THEN 'Approved'
                              END AS status 
                              FROM `add_book` ab
                              INNER JOIN book_request br ON br.book_id = ab.b_id
                              WHERE br.student_id=$s_id AND br.status=1 AND CURRENT_DATE > br.return_date AND fine=0";
				
//				var_dump($book_select);
				$book_statement=mysqli_query($con,$book_select);
				if(mysqli_num_rows($book_statement)>0)
				{
					$total_fine=0;
					$fine=0;
				    $days=0;
					?>
		<table width="100%">
		<tr>
			<th>PRODUCT</th>
			<th>PRODUCT DETAILS</th>
			<th>PRICE</th>
			<th>STATUS</th>
			<th>REQUESTED DATE</th>
			<th>APPROVE DATE</th>
			<th>RETURN DATE</th>
			<th>DUE DAY</th>
			<th>FINE<br>(per day 20/-)</th>
			</tr>
			<tr>
				<?php
			
					while($book=mysqli_fetch_assoc($book_statement))
					{
						$date=$book['requested_date'];
					
					$date2=date_create($date);

					
					$approve_date=$book['approve_date'] != "" ? date_create($book['approve_date']) : "";

					$return_date=$book['return_date'] != "" ? date_create($book['return_date']) : "";
					
						
						$date1=date_create(date("Y-m-d"));
                        $date3=date_create($book['return_date']);
					if($date3 < $date1)
					{
						 $diff=date_diff($date1,$date3);
					
					$days = $diff->d;
						
						if($days != 0)
					{
						$fine=(20 * $days);
						$total_fine=$fine+$total_fine;
					}
					}
							
				?>
			<td><img src="images/books/<?php echo $book['b_image'];?>"></td>
			<td><?php echo $book['b_title'];?></td>
			<td><?php echo $book['b_price'];?></td>
			<td><?php echo $book['status'];?></td>
			<td><?php echo date_format($date2,"d/m/Y");?></td>
			<td><?php echo $book['approve_date'] != "" ? date_format($approve_date,"d/m/Y") : "NILL";?></td>
			<td><?php echo $book['return_date'] != "" ? date_format($return_date,"d/m/Y") : "NILL";?></td>
			<td><?php echo $book['status'] == 2 ? "NILL" : $days . " days"  ;?></td>
			<td><?php echo $book['status'] == 2 ? "0" : $fine;?>/-</td>
			</tr>
			
			<?php
				}
				
			?>
			<tfoot>
			<tr>
				<th>TOTAL</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><?php echo $total_fine;?>/-</td>
				</tr>
			</tfoot>
			</table>
					<a href="student_payment.php?s_id=<?php echo $s_id;?>"><button class="mp">Make a Payment</button></a>
					<?php
				}
					else
					{
						echo "NO DETAILS";
					}
						?>
					
		</div>
</body>
</html>