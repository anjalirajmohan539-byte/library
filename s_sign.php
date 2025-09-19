<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/s_sign.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner_img">
	<div class="container banner">
		<div class="s_signup">
		<h1>STUDENT</h1>
			 <h2>SIGNUP</h2>
			<form action="s_sign_action.php" method="post" enctype="multipart/form-data" onSubmit="return validation();">
				<h3 class="image">Image</h3>
				<input type="file" name="image" id="immg" oninput="remove_validation('immg');">
				
				<div class="col-6 first">
				<h3 class="f_name">First Name</h3>
				<input type="text" name="name" id="f_name" placeholder="first name" oninput="remove_validation('f_name');">
					<h3 class="email_i">Email</h3>
				<input type="email" name="email" id="email_i" placeholder="email">
					<h3 class="birth_d">Date of Birth</h3>
				<input type="date" name="date_of_birth" id="birth_d" placeholder="date of birth" oninput="remove_validation('birth_d');">
					<h3 class="ph">Phone no</h3>
				<input type="number" name="number" id="ph" placeholder="phone no" oninput="remove_validation('ph');">
					<h3 class="class">Class</h3>
				<input type="text" name="class" id="dep" placeholder="class">
				</div>
				
				
				
				<div class="col-6 last">
				<h3 class="l_names">Last Name</h3>
				<input type="text" name="l_name" id="l_names" placeholder="last name">
				<h3 class="pass">Password</h3>
				<input type="password" name="password" id="pass" placeholder="password" oninput="remove_validation('pass');">
				<h3 class="gen">Gender</h3>
				<input type="radio" id="male" value="male" name="male_n" oninput="remove_validation('male');">
				<label for="male">Male</label>
				<input type="radio" id="female" value="female" name="male_n" oninput="remove_validation('female');">
				<label for="female">Female</label>
				<h3 class="add">Address</h3>
				<textarea placeholder="address" name="add" id="address" onChange="remove_validation('address');"></textarea>
					<h3 class="dep">Department</h3>
				<input type="text" name="class_1" id="dep_1" placeholder="section">
				</div>
			
				
				
				<div class="cl"></div>

				<ul class="tik">
				<li>
					<input type="checkbox" id="satement">
			<label id="box" for="satement">
				<p class="rrr">By create an account,<b>I agree to Term</b></p>
			</label>
					</li>
				</ul>
				<div class="sub">
				<input type="submit" name="submit" id="submit" value="signup">
					</div>
			</form>
			<div class="cl"></div>
			<p class="read">Already have an account ? <a href="login.php">Login here</a></p>
		</div>
		</div>
	</div>
</body>
	<script>
	function validation()
		{
			let image=document.getElementById("immg");
			let name=document.getElementById("f_name");
			let birth_date=document.getElementById("birth_d");
			let phone=document.getElementById("ph");
			let password=document.getElementById("pass");
			let female=document.getElementById("female");
			let male=document.getElementById("male");
			let address=document.getElementById("address");
			let f=0;
			
			if(image.value == "")
				{
					image.style.border="1px solid red";
					f=1;
				}
			
			if(name.value == "")
				{
					name.style.border="1px solid red";
					f=1;
				}
			
			if(birth_date.value == "")
				{
					birth_date.style.border="1px solid red";
					f=1;
				}
			
			if(phone.value == "")
				{
					phone.style.border="1px solid red";
					f=1;
				}
			
			if(password.value == "")
				{
					password.style.border="1px solid red";
					f=1;
				}
			
			if(female.checked == false && male.checked == false)
				{
					alert("please select gender");
					f=1;
				}
			
			if(address.value == "")
				{
					address.style.border="1px solid red";
					f=1;
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
		
		function remove_validation(field)
		{
			let title=document.getElementById(field);
			
					title.style.border="none";
				
		}
		
	</script>
</html>
