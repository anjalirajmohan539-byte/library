<?php

include('database.php');
$active = 100;
if(!empty($_GET["page_id"])){
 $active=$_GET["page_id"];
//  echo $active;
}




?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/users.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<div class="table">
			<?php
			switch($active)
			{
				case 1:
					echo "<h1>ACTIVE USERS</h1><hr>";
					break;
				case 2:
					echo "<h1>INACTIVE USERS</h1><hr>";
					break;
				default :
				echo "<h1>TOTAL USERS</h1><hr>";
			}

			?>
		
	<table style="width:100%">
  <tr>
	<th>NAME</th>
    <th>USERNAME</th>
	<th>PHONE NO</th>
	<th>USERTYPE</th>
    <th>CLASS / BLOCK</th>
	<th>ACTIVE / INACTIVE</th>

  </tr>
		<?php
		
		
		$s_select = "SELECT s_first_name as name, l_username AS username, l_usertype AS usertype, s_phone_no as phone_no, s_class AS class ,l_active ,
		CASE WHEN l_active = 1 THEN 'Active'
             WHEN l_active = 2 THEN 'Inactive'
             END AS l_active";
		$s_select = $s_select . " FROM login INNER JOIN student_signup ON s_lid=l_id ";
		 if($active==1 or $active==2)
		{
			$s_select=$s_select."where l_active=$active";
		}
		
		$s_select = $s_select . " UNION 
				   SELECT t_full_name as name, l_username as username,l_usertype as usertype, t_phone_no as phone_no,t_class AS class ,l_active ,
				   CASE WHEN l_active = 1 THEN 'Active'
                        WHEN l_active = 2 THEN 'Inactive'
                        END AS l_active 
				    FROM `login` INNER JOIN teacher_signup ON t_lid=l_id ";
		
		
		 if($active==1 or $active==2)
		{
			$s_select=$s_select."where l_active=$active";
		}
		
		// var_dump($s_select);
		
		$l_statmnt=mysqli_query($con,$s_select);
		
		if(mysqli_num_rows($l_statmnt)>0)
		{
			while($users=mysqli_fetch_assoc($l_statmnt))
			{	
		?>
  <tr>
	<td><?php echo $users["name"];?></td>
    <td><?php echo $users["username"];?></td>
    <td><?php echo $users["phone_no"];?></td>
	<td><?php echo $users["usertype"];?></td>
	<td><?php echo $users["class"];?></td>
	<td><?php echo $users["l_active"];?></td>
  </tr>
		<?php 		}
		} ?>
		</table>
	</div>
	</div>
</body>
</html>
