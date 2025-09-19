<?php

include('database.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/admin_due_list.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<h1>DUE LIST</h1>
		<div class="cl"></div>
	<div class="container table">
		<div class="col-12">
			<div class="col-3 total">
			</div>
		<table width="100%">
		<tr>
			<th>BOOK&nbsp;IMAGE</th>
			<th>BOOK&nbsp;NAME</th>
			<th>STUDENT&nbsp;NAME</th>
			<th>PHONE&nbsp;NUMBER</th>
			<th>APPROVE&nbsp;DATE</th>
			<th>RETURN&nbsp;DATE</th>
			<th>DUE&nbsp;DATE</th>
			<th>FINE</th>
			</tr>
			
			<?php
			$select_due="SELECT `b_title`, `b_image`,`s_first_name`, `s_phone_no`,`approve_date`,`return_date`
                         FROM `add_book` ab
                         INNER JOIN book_request br ON br.book_id = ab.b_id 
                         INNER JOIN student_signup st ON st.s_lid = br.student_id
						 WHERE fine=0 AND status=1
                         ORDER BY return_date ASC";
			
			
			$due_statemnt=mysqli_query($con,$select_due);
			
			if(mysqli_num_rows($due_statemnt)>0)
			{
				$total_fine=0;
					$fine=0;
				$days=0;
				while($due_list=mysqli_fetch_assoc($due_statemnt))
				{
					
					$approve_date=$due_list['approve_date'] != "" ? date_create($due_list['approve_date']) : "";

					$return_date=$due_list['return_date'] != "" ? date_create($due_list['return_date']) : "";
					
					$date1=date_create(date("Y-m-d"));
                    $date2=date_create($due_list['return_date']);
					if($date2 < $date1)
					{
						 $diff=date_diff($date1,$date2);
					$days = $diff->d;
						
						if($days != 0)
					{
						$fine=(20 * $days);
						$total_fine=$fine+$total_fine;
					}
					}
			?>
				<tr>
			<td><img src="images/books/<?php echo $due_list['b_image'];?>" class="img-fluid"></td>
			<td><?php echo $due_list['b_title'];?></td>
			<td><?php echo $due_list['s_first_name'];?></td>
			<td><?php echo $due_list['s_phone_no'];?></td>
			<td><?php echo $due_list['approve_date'] != "" ? date_format($approve_date,"d/m/Y") : "NILL";?></td>
			<td><?php echo $due_list['return_date'] != "" ? date_format($return_date,"d/m/Y") : "NILL";?></td>
			<td><?php echo $days. " days" ;?></td>
			<td><?php echo $fine;?>/-</td>
			</tr>
			
			<?php 
				}
			}
			?>
			
			 <tfoot>
    <tr>
      <th>Totals</th>
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
		</div>
		</div>
	
	</div>
</body>
</html>