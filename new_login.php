<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Sign Up — Registration</title>
  <link href="css/new_login.css" rel="stylesheet">
</head>
<body>
  <div class="container">

  <aside class="card-right">
      <div class="avatar-preview" id="avatarBox">
        <div style="text-align:center;padding:10px;color:var(--muted)">
          <div style="font-size:18px;font-weight:700">Welcome!</div>
          <div class="small">Upload a profile photo to preview here.</div>
        </div>
      </div>

      <div style="width:100%;text-align:center;margin-top:8px">
        <div class="muted-note">We protect your data — secure authentication and encrypted storage.</div>
      </div>

    </aside>
    
    <section class="left">
      <div class="brand">
        
        <div>
          <h1>Create your account</h1>
          <p class="lead">Join us — quick signup and secure access.</p>
        </div>
      </div>

      <form id="regForm" novalidate>

      <div class="full">
          <label for="avatar">Profile photo</label>
          <input id="avatar" name="avatar" type="file" accept="image/*" />
          <div class="small">Upload a square photo (will be cropped).</div>
        </div>


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
          <label for="phone">Phone </label>
          <input id="phone" name="phone" type="text" placeholder="+91 98765 43210" />
        </div>

        <div>
          <label for="confirm">Confirm password</label>
          <input id="confirm" name="confirm" type="password" placeholder="Confirm password" required />
          <div class="error" id="confirmErr"></div>
        </div>

        <div>
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="Create a strong password" required />
          <div class="small" id="pwdStrength">Strength: —</div>
          <div class="error" id="pwdErr"></div>
        </div>



        <div>
          <label for="role">Account type</label>
          <select id="role" name="role">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="librarian">Librarian</option>
          </select>
        </div>


        <div class="full">
          <label for="bio">Short bio (optional)</label>
          <input id="bio" name="bio" type="text" placeholder="A short line about you" />
        </div>

        

        <div class="full row">
          <button type="submit" class="btn">Create account</button>
          <div style="flex:1" aria-hidden></div>
        </div>

      </form>

      <div class="footer">Already have an account? <a href="#" style="color:var(--accent);text-decoration:none">Sign in</a></div>
    </section>

  </div>

  <script>
    // small client-side validation + avatar preview
    const form = document.getElementById('regForm');
    const nameErr = document.getElementById('nameErr');
    const emailErr = document.getElementById('emailErr');
    const pwdErr = document.getElementById('pwdErr');
    const confirmErr = document.getElementById('confirmErr');
    const pwdStrength = document.getElementById('pwdStrength');
    const avatarInput = document.getElementById('avatar');
    const avatarBox = document.getElementById('avatarBox');

    function assessPassword(pw){
      let score = 0;
      if(pw.length >= 8) score++;
      if(/[A-Z]/.test(pw)) score++;
      if(/[0-9]/.test(pw)) score++;
      if(/[^A-Za-z0-9]/.test(pw)) score++;
      if(pw.length >= 12) score++;
      return score; // 0-5
    }

    document.getElementById('password').addEventListener('input', (e)=>{
      const s = assessPassword(e.target.value);
      const labels = ['Very weak','Weak','Okay','Good','Strong','Excellent'];
      pwdStrength.textContent = 'Strength: ' + labels[s];
    });

    avatarInput.addEventListener('change', (e)=>{
      const f = e.target.files && e.target.files[0];
      if(!f) return;
      const url = URL.createObjectURL(f);
      avatarBox.innerHTML = '';
      const img = document.createElement('img'); img.src = url; img.alt = 'avatar';
      avatarBox.appendChild(img);
    });

    function validEmail(v){
      return /\S+@\S+\.\S+/.test(v);
    }

    form.addEventListener('submit', (ev)=>{
      ev.preventDefault();
      // reset
      nameErr.textContent = '';
      emailErr.textContent = '';
      pwdErr.textContent = '';
      confirmErr.textContent = '';

      const name = form.fullname.value.trim();
      const email = form.email.value.trim();
      const pw = form.password.value;
      const confirm = form.confirm.value;

      let ok = true;
      if(name.length < 2){ nameErr.textContent = 'Please enter your full name.'; ok=false }
      if(!validEmail(email)){ emailErr.textContent = 'Please enter a valid email.'; ok=false }
      if(assessPassword(pw) < 3){ pwdErr.textContent = 'Password is too weak. Use longer with numbers and symbols.'; ok=false }
      if(pw !== confirm){ confirmErr.textContent = 'Passwords do not match.'; ok=false }

      if(!ok) return;

      // mock success — in a real app you'd POST to your backend
      alert('Account created — (this is a demo).');
      form.reset();
      avatarBox.innerHTML = '<div style="text-align:center;padding:10px;color:var(--muted)"><div style="font-size:18px;font-weight:700">Welcome!</div><div class="small">Upload a profile photo to preview here.</div></div>';
      pwdStrength.textContent = 'Strength: —';
    });
  </script>
</body>
</html>
