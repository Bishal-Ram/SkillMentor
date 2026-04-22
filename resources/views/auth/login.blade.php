<!DOCTYPE html>
<html>
<head>
    <title>SkillMentor Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg,#0f172a,#1e293b);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-card{
            background:white;
            padding:40px;
            width:350px;
            border-radius:10px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        .title{
            text-align:center;
            font-size:24px;
            font-weight:bold;
            margin-bottom:5px;
        }

        .subtitle{
            text-align:center;
            color:gray;
            margin-bottom:25px;
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
            cursor:pointer;
        }

        button:hover{
            background:#1d4ed8;
        }

        .register{
            text-align:center;
            margin-top:15px;
        }

        .register a{
            color:#2563eb;
            text-decoration:none;
        }

    </style>

</head>

<body>

<div class="login-card">

<div class="title">SkillMentor</div>
<div class="subtitle">Login to your account</div>

<form method="POST" action="{{ route('login') }}">
@csrf

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit">Login</button>

</form>

<div class="register">
Don't have an account? 
<a href="{{ route('register') }}">Register</a>
</div>

</div>

</body>
</html>