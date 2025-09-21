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

      <form id="regForm" novalidate>

        <div class="full">
          <label for="email">Email / Username</label>
          <input id="email" name="email" type="email" placeholder="you@example.com" required />
          <div class="error" id="emailErr"></div>
        </div>


        <div class="full">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="......" required />
          <div class="error" id="pwdErr"></div>
        </div>


        <div class="full row">
          <button type="submit" class="btn">Login</button>
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
</html>