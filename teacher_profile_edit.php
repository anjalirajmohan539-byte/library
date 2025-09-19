<?php
session_start();
include('database.php');


if(isset($_SESSION['id']))
{
	 $id=$_SESSION['id'];
	
	
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/my_profile2.css" rel="stylesheet">
</head>

<body>
		<?php
		$t_select="SELECT * FROM `teacher_signup` WHERE t_lid=$id";
	$t_statement=mysqli_query($con,$t_select);
	
	if(!$t_statement)
	{
		echo "error";
	}
else
{
	
	$t_detail=mysqli_fetch_array($t_statement);
	
	$image=$t_detail['t_images'];
	 $name=$t_detail['t_full_name'];
	$address=$t_detail['address'];
	$age=$t_detail['t_age'];
	$email=$t_detail['email'];
	$contact=$t_detail['t_phone_no'];
	$cource=$t_detail['t_class'];
	
	?>
	<div class="modal">
    <div class="modal-header">Edit your Profile</div>
    <div class="modal-content">

		<form action="t_profile_edit_action2.php" method="post">
      <div class="profile-photo">
        <img src="images/profiles/<?php echo $image;?>" name="image" alt="Profile Photo">
		  <input type="hidden" name="image2" value="<?php echo $image;?>">
        <br>
        <button>CHANGE PHOTO</button>
      </div>

      
        <div class="form-group">
          <label>Name:</label>
          <input type="text" name="name" value="<?php echo $name;?>">
			<input type="hidden" name="id" value="<?php echo $id;?>">
        </div>
        <div class="form-group">
          <label>Age:</label>
          <input type="number" name="age" value="<?php echo $age;?>">
        </div>
        <div class="form-group">
          <label>Address:</label>
          <textarea name="address"><?php echo $address;?></textarea>
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" value="<?php echo $email;?>">
        </div>
        <div class="form-group">
          <label>Contact:</label>
          <input type="number" name="contact" value="<?php echo $contact;?>">
        </div>
        <div class="form-group">
          <label>Cource:</label>
          <input type="text" name="cource" value="<?php echo $cource;?>">
        </div>
      
    </div>

    <div class="modal-footer">
      <a href="t_profile.php"><button class="cancel">Cancel</button></a>
      <button class="save">Save</button>
    </div>
		</form>
  </div>
	<?php } }?>
</body>
</html>