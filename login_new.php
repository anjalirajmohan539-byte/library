   <?php

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
<link href="css/login_new.css" rel="stylesheet">
</head>

<body>
	<div class="container">

<aside class="card-right">
          <div style="font-size:30px;font-weight:700">Welcome!</div>
          <div class="small">Login your account here.</div>

      <div style="width:100%;text-align:center;margin-top:8px">
        <div class="muted-note">We protect your data — secure authentication and encrypted storage.</div>
      </div>

    </aside>
    
    <section class="left">
      <div class="brand">
        
        <div>
          <h1></h1>
          <p class="lead">Login your account</p>
        </div>
      </div>

      <form id="regForm" action="login_action.php" method="post" onSubmit="remove_validation();">

      <div class="error" id="error"></div>

        <div class="full">
          <label for="email">Email / Username</label>
          <input id="email" name="email" type="email" placeholder="you@example.com" oninput="remove_validation('email','emailErr');">
          <div class="error" id="emailErr"></div>
        </div>


        <div class="full">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="......" oninput="remove_validation('password','pwdErr');">
          <div class="error" id="pwdErr"></div>
        </div>


        <div class="full row">
          <button type="submit" name="submit" id="submit" class="btn">Login</button>
          <div style="flex:1" aria-hidden></div>
        </div>

      </form>

      <div class="footer">Already have an account?</div>
	  <div>
	     <a href="student_registration.php" style="color:var(--accent);text-decoration:none;margin-left:50px">Student Sign in</a>
	     <a href="teacher_registration.php" style="color:var(--accent);text-decoration:none;margin-left:150px">Teacher Sign in</a>
      </div>
    </section>
	<div>
</body>
<script>
	function validate()
		{
			let em=document.getElementById("email");
			let pas=document.getElementById("password");
			let emm=document.getElementById("emailErr");
			let error_password=document.getElementById("pwdErr");
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