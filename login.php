  <?php
//echo "<script>alert('please enter your correct email or password');</script>";
session_start();
include('database.php');
$emailerror="";
if(isset($_SESSION['error']))
{
	$emailerror=$_SESSION['error'];
	$_SESSION['error']="";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/library_2.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid login_background">
	<div class="container ll">
		<div class="login">
		<h1>LOGIN</h1>
		<form action="login_action.php" method="post"  onSubmit="return validate();" >
			<label id="error"><?php echo $emailerror;?></label>
		<input id="email" type="text" class="email" name="user" placeholder="Username/Email" oninput="remove_validation('email','eemail');">
			
			<div class="col-12 error_email">
			<label id="eemail">
			</label>
				</div>
			
		<input id="password" type="password" name="password" placeholder="Password" oninput="remove_validation('password','error_password');">
			
				<div class="col-12 error_password1">
			<label id="error_password">
			</label>
				</div>
			
			
			<ul class="tick">
		<li>
			<input type="checkbox" id="satement">
				<a class="one" href="forgot.php">forgot password ?</a>
			</li>
		</ul>
		<input id="login" type="submit" value="LOGIN" name="submit">
			
		</form>
		<p2>Don't have an account ? <a href="index_registration.php">Register here</a></p2>
		</div>
		</div>
	</div>
</body>
	<script>
	function validate()
		{
			let em=document.getElementById("email");
			let pas=document.getElementById("password");
			let emm=document.getElementById("eemail");
			let error_password=document.getElementById("error_password");
			let error=document.getElementById("error");
			let f=0;

			if(em.value == "")
				{
					
					em.style.border="1px solid red";
					em.focus();
					em.style.outline="none";
					emm.innerHTML="Enter your Email";
					f=1;
				}
			
			
			if(pas.value == "")
				{
					pas.style.border="1px solid red";
					pas.focus();
					pas.style.outline="none";
					error_password.innerHTML="Enter your Password";
					f=1;
				}
			
			if(error.value == "")
				{
					error.style.
				}
			
			
			if(f==0)
				{
					return true;
				}
			else
				{
					return false;
				}
		}
		
//		remove_validation('email','eemail')
//		remove_validation('password','error_password')
		function remove_validation(fieldId,errormessage)
		{
			
			let email=document.getElementById(fieldId);
			let emm=document.getElementById(errormessage);
			
			email.style.border="none";
			emm.innerHTML="";
			
		}
	</script>
</html>
