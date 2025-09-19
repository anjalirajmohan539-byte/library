<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/signup.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid signiup_img">
	<div class="container signup">
		<div class="signin">
		<h1>TEACHER</h1>
			<h2>SIGNUP</h2>
		<form action="t_sign_action.php" method="post" enctype="multipart/form-data" onSubmit="return validation();">
			<h3>Image</h3>
			<input type="file" name="image" id="immg" oninput="remove_validation('immg');">
			
			<div class="col-6 first">
			<h3 class="name">Full Name</h3>
		<input id="name" type="text" name="name" placeholder="Full Name" oninput="remove_validation('name');">
			
			<h3 class="age">Age</h3>
			<input id="age" type="number" name="age">
				
				
				<h3 class="add">Address</h3>
				<textarea placeholder="address" name="add" id="add" onChange="remove_validation('add');"></textarea>
			
			<h3 class="password">Password</h3>
		<input id="password" type="password" name="password" placeholder="Password" oninput="remove_validation('password');">
				<h3 class="class">Class</h3>
			<input type="text" id="cource" name="class" placeholder="Class">
			</div>
			
			
			<div class="col-6 last">
					<h3 class="phone">Phone no</h3>
		<input id="phone_no" type="number" name="number" placeholder="Phone_no" oninput="remove_validation('phone_no');">
			
				
			
			
			<div class="cl"></div>
			<h3 class="gender">Gender</h3>
			<input type="radio" id="male"  value="male" name="male" oninput="remove_validation('male');">
			<label for="male">Male</label>
			
			<input type="radio" id="female" value="female" name="male" oninput="remove_validation('female');">
			<label for="female">Female</label>
			
		
				
				<h3 class="email">Email</h3>
		<input id="email" type="text" name="user" placeholder="Email" oninput="remove_validation('email');">
				
				
				<h3 class="dep">Department</h3>
			<input type="text" id="cource_2" name="class1" placeholder="Section">
			</div>
			

			
			<div class="cl"></div>
			
			<ul class="tick">
		<li>
			<input type="checkbox" id="satement">
			<label id="box" for="satement">
			<span></span>
				<p class="read_1">By create an account,<b>I agree to Term</b></p>
			</label>
			</li>
		</ul>
			<input id="signup" name="signup" type="submit" value="SIGNUP">
		</form>
		<p class="read">Already have an account ? <a href="login.php">Login here</a></p>
		</div>
		</div>
		<div class="cl"></div>
	</div>
</body>
	<script>
	
		function validation()
		{
			let image=document.getElementById("immg");
			let name=document.getElementById("name");
			let address=document.getElementById("add");
			let password=document.getElementById("password");
			let phone=document.getElementById("phone_no");
			let male=document.getElementById("male");
			let female=document.getElementById("female");
			let email=document.getElementById("email");
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
			
			if(address.value == "")
				{
					address.style.border="1px solid red";
					f=1;
				}
			
			if(password.value == "")
				{
					password.style.border="1px solid red";
					f=1;
				}
			
			if(phone.value == "")
				{
					phone.style.border="1px solid red";
					f=1;
				}
			
			if(female.checked == false && male.checked == false)
				{
					alert("please select gender");
					f=1;
				}
			
			if(email.value == "")
				{
					email.style.border="1px solid red";
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
		
		
		function remove_validation(fields)
		{
			let name=document.getElementById('name');
			name.style.border="none";
		}
	
	</script>
</html>
