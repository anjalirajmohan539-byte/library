<?php

include('database.php');

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/t_list.css" rel="stylesheet">
</head>

<body>
	
	 <h1>Student List</h1>

  <div class="list-container">
	  
	  <?php
	  $select="SELECT `t_images`, `t_full_name`, `email`, `t_phone_no`, `t_class` FROM `login` INNER JOIN `teacher_signup` WHERE t_lid=l_id";
	  $statemnt=mysqli_query($con,$select);
	  
//	  var_dump($select);
	  if(mysqli_num_rows($statemnt)>0)
	  {
		  while($teacher=mysqli_fetch_assoc($statemnt))
		  {
			  
	  ?>
    <div class="card">
		<img src="images/profiles/<?php echo $teacher['t_images'];?>">
      <h2>01. <?php echo $teacher['t_full_name'];?></h2>
      <p><b>Email:</b> <?php echo $teacher['email'];?></p>
      <p><b>Phone no:</b> <?php echo $teacher['t_phone_no'];?></p>
      <p><b>Class:</b> <?php echo $teacher['t_class'];?></p>
    </div>

	  
	  <?php   }
	  }?>
	  
  </div>
	
</body>
</html>