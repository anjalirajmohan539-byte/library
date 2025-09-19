<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/admin_account.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner">
		<h1>ACCOUNT</h1>
		<div class="container blik">
		
		<div class="profile">
		<h2>PROFILE ></h2>
			<form action="#" method="post">
				<img src="images/girl2_image.jpg">
			<div class="r">
			<h3>YOUR NAME :</h3>
				<input id="name" type="text" name="name">
				</div>
				<div class="p">
			<h3>PROFESSIONAL TITLE</h3>
				<input id="professional" type="text" name="professional">
				</div>
				<div class="l">
					<h3>LANGUAGE</h3>
				<input id="language" type="text" name="language">
				</div>
				<div class="age">
					<h3>AGE</h3>
				<input id="age" type="number" name="age">
				</div>
		</div>
		
		
		
		
		<div class="personal_information">
		<h2>CONTACT INFORMATION ></h2>
			<div class="contact_n">
				<h3>CONTACT NUMBER</h3>
				<input id="contact_n" type="number" name="number">
				</div>
				<div class="address">
				<h3>FULL ADDRESS</h3>
					<input id="address" type="text" name="address">
				</div>
				<div class="email">
				<h3>EMAIL ADDRESS</h3>
					<input id="email" type="email" name="email">
				</div>
				
				<div class="country">
				<h3>COUNTRY</h3>
			<select name="country" id="country">
			<option value="" disabled selected>Select country</option>
            <option value="india">INDIA</option>
            <option value="japan">JAPAN</option>
            <option value="England">ENGLAND</option>
			<option value="England">KOREA</option>
			<option value="England">AMERICA</option>
			<option value="England">UAE</option>
            <option value="Other">Other</option>
        </select>
				</div>
				
				<div class="postcode">
				<h3>POSTCODE</h3>
					<input id="postcode" type="number" name="postcode">
				</div>
				
				<div class="city">
				<h3>CITY</h3>
					<select name="city" id="city">
			<option value="" disabled selected>Select city</option>
            <option value="india">THRISSUR</option>
            <option value="japan">PALAKKAD</option>
            <option value="England">THIRUVANANDHAPURAM</option>
			<option value="England">KOZHIKKOD</option>
			<option value="England">KOCHI</option>
			<option value="England">KOTTAYAM</option>
            <option value="Other">Other</option>
        </select>
				</div>
			</form>
		</div>
	</div>
		</div>
</body>
</html>
