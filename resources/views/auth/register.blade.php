<!DOCTYPE html>
<html>
<head>
<title>SkillMentor Register</title>

<style>

body{
margin:0;
font-family:Arial;
background: linear-gradient(135deg,#0f172a,#1e293b);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.card{
background:white;
padding:40px;
width:350px;
border-radius:10px;
}

.title{
text-align:center;
font-size:24px;
font-weight:bold;
margin-bottom:20px;
}

input{
width:100%;
padding:12px;
margin-top:10px;
border:1px solid #ddd;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#2563eb;
color:white;
border:none;
margin-top:20px;
border-radius:5px;
}

</style>

</head>

<body>

<div class="card">

<div class="title">SkillMentor Register</div>

<form method="POST" action="{{ route('register') }}">
@csrf

<input type="text" name="name" placeholder="Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<input type="password" name="password_confirmation" placeholder="Confirm Password" required>

<button>Register</button>

</form>

</div>

</body>
</html>