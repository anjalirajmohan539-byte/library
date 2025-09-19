<?php

include('database.php');

session_start();

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
	<link href="css/student_payment.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
	<div class="container">
		<div class="col-12 payment">
		<h1>PAYMENT METHOD</h1>
		<form action="student_payment_action.php" method="post" enctype="multipart/form-data">
		<div class="col-12">
		<div class="col-6 gpayy">
			<input type="radio" name="gpay" required>
			<label for="gpay"><img src="images/gpay-logo.png" class="img-fluid"></label>
			</div>
		<div class="col-6 phonepee">
			<input type="radio" name="gpay" required>
			<label for="phonepe"><img src="images/phonepe.png" class="img-fluid"></label>
		</div>
			</div>
			<h3>Name on Card</h3>
		<input type="text" name="name" placeholder="Full Name">
			
			<div class="cl"></div>
		<div class="col-6 card">
		<h3>Card Number</h3>
			<input type="number" name="number" id="no">
		</div>
		<div class="col-6">
		<h3>CVV</h3>
			<input type="number" name="numer1" id="no">
		</div>
			
			<input type="hidden" name="s_id" value="<?php echo $s_id;?>">
		
			<h3 class="ed">Expiration Date</h3>
			<input type="text" name="date" placeholder="MM/YY">
			
			<div class="cl"></div>
			<a href="payment_success.php"><button class="button">MAKE A PAY</button></a>
		</form>
		</div>
		</div>
	</div>
</body>
</html>