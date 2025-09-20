<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up — Registration</title>
<link href="css/index_registration.css" rel="stylesheet">
</head>
<body>

<div class="container">
<section class="left">
<h1>Create your account</h1>
<p class="lead">Join us — quick signup and secure access.</p>
</div>



<form id="regForm" action="#" method="post">
<div class="full">
<label for="fullname">Full name</label>
<input id="fullname" name="fullname" type="text" placeholder="Anjali Rajmohan" required />
<div class="error" id="nameErr"></div>
</div>


<div>
<label for="email">Email</label>
<input id="email" name="email" type="email" placeholder="you@example.com" required />
<div class="error" id="emailErr"></div>
</div>


<div>
<label for="phone">Phone (optional)</label>
<input id="phone" name="phone" type="text" placeholder="+91 98765 43210" />
</div>


<div>
<label for="role">Account type</label>
<select id="role" name="role">
<option value="student">Student</option>
<option value="teacher">Teacher</option>
<option value="librarian">Librarian</option>
</select>
</div>


<div>
<label for="password">Password</label>
<input id="password" name="password" type="password" placeholder="Create a strong password" required />
</div>


<div>
<label for="confirm">Confirm password</label>
<input id="confirm" name="confirm" type="password" placeholder="Confirm password" required />
<div class="error" id="confirmErr"></div>
</div>
</div>
</body>
</html>