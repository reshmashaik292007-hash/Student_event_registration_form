<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{

height:100vh;

display:flex;

justify-content:center;

align-items:center;

background:linear-gradient(135deg,#4facfe,#00f2fe);

}

.login-box{

width:420px;

background:white;

padding:40px;

border-radius:15px;

box-shadow:0 15px 40px rgba(0,0,0,.2);

}

.login-box h2{

text-align:center;

margin-bottom:30px;

color:#0d6efd;

}

.input-group{

margin-bottom:20px;

}

.input-group label{

display:block;

margin-bottom:8px;

font-weight:bold;

}

.input-group input{

width:100%;

padding:12px;

border:1px solid #ccc;

border-radius:8px;

font-size:15px;

}

.password-box{

position:relative;

}

.password-box input{

padding-right:45px;

}

.password-box i{

position:absolute;

right:15px;

top:14px;

cursor:pointer;

color:#666;

}

button{

width:100%;

padding:13px;

background:#0d6efd;

color:white;

border:none;

border-radius:8px;

font-size:17px;

cursor:pointer;

transition:.3s;

}

button:hover{

background:#084298;

}

.back{

display:block;

text-align:center;

margin-top:15px;

text-decoration:none;

color:#555;

}

</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<form action="admin_process.php" method="POST">

<div class="input-group">

<label>Username</label>

<input type="text"
name="username"
required>

</div>

<div class="input-group">

<label>Password</label>

<div class="password-box">

<input
type="password"
id="password"
name="password"
required>

<i class="fa-solid fa-eye"
id="togglePassword"></i>

</div>

</div>

<button type="submit">
Login
</button>

<a href="index.php" class="back">

← Back to Registration

</a>

</form>

</div>

<script>

const password=document.getElementById("password");

const toggle=document.getElementById("togglePassword");

toggle.onclick=function(){

if(password.type==="password"){

password.type="text";

toggle.classList.remove("fa-eye");

toggle.classList.add("fa-eye-slash");

}

else{

password.type="password";

toggle.classList.remove("fa-eye-slash");

toggle.classList.add("fa-eye");

}

}

</script>

</body>
</html>