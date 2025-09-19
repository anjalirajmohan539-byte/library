<?php

include('database.php');

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/s_list.css" rel="stylesheet">
</head>

<body>
	
	 <h1>Student List</h1>

  <div class="list-container">
	  
	  <?php
	  $select="SELECT `s_image`, `s_first_name`, `s_username_email`, `s_date_of_birth`, `s_phone_no`, `s_class` FROM `login`INNER JOIN `student_signup` WHERE s_lid=l_id";
	  $statemnt=mysqli_query($con,$select);
	  
//	  var_dump($select);
	  if(mysqli_num_rows($statemnt)>0)
	  {
		  while($student=mysqli_fetch_assoc($statemnt))
		  {
			  
	  ?>
    <div class="card">
		<img src="images/profiles/<?php echo $student['s_image'];?>">
      <h2>01. <?php echo $student['s_first_name'];?></h2>
      <p><b>Email:</b> <?php echo $student['s_username_email'];?></p>
      <p><b>Date of Birth:</b> <?php echo $student['s_date_of_birth'];?></p>
      <p><b>Phone no:</b> <?php echo $student['s_phone_no'];?></p>
      <p><b>Class:</b> <?php echo $student['s_class'];?></p>
    </div>

	  
	  <?php   }
	  }?>
	  
  </div>
	
</body>
</html>