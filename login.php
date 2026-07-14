<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Login</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="container">

<div class="form-box">

<h1>🔐 Student Login</h1>

<p>Login to view your registered event</p>

<form action="login_process.php" method="POST">

<div class="input-group">

<label>Email</label>

<input
type="email"
name="email"
placeholder="Enter your email"
required>

</div>


<div class="input-group">

<label>Password</label>

<div class="password-box">

<input
type="password"
id="loginPassword"
name="password"
placeholder="Enter your password"
required>

<i
class="fa-solid fa-eye-slash"
id="toggleLoginPassword">

</i>

</div>

</div>


<div class="button-row">

<button
type="submit"
class="register-btn">

Login

</button>

<a
href="index.php"
class="login-btn">

Register

</a>

</div>

</form>

</div>

</div>

<script>

const loginPassword=document.getElementById("loginPassword");

const toggle=document.getElementById("toggleLoginPassword");

toggle.addEventListener("click",function(){

if(loginPassword.type==="password"){

loginPassword.type="text";

this.classList.remove("fa-eye-slash");

this.classList.add("fa-eye");

}

else{

loginPassword.type="password";

this.classList.remove("fa-eye");

this.classList.add("fa-eye-slash");

}

});

</script>

</body>

</html>