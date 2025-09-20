 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/login_new.css" rel="stylesheet">
</head>

<body>
<div>
<h2>LOGIN</h2>
</div>
<div class="container">
<section class="left">
<h1>Welcome</h1>
<p class="lead">Join us — quick signup and secure access.</p>
</div>

<form id="regForm" action="#" method="post">
<div>
<label for="email">Email</label>
<input id="email" name="email" type="email" placeholder="you@example.com" required />
<div class="error" id="emailErr"></div>
</div>

<div>
<label for="password">Password</label>
<input id="password" name="password" type="password" placeholder="Create a strong password" required />
</div>

<div class="forgot">
	<a class="one" href="forgot.php">forgot password ?</a>
</div>
<input id="login" type="submit" value="LOGIN" name="submit">
</form>
</body>
</html>