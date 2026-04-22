<!DOCTYPE html>
<html>
<head>
<title>SkillMentor</title>

<style>

body{
    margin:0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#0f172a,#1e293b);
    color:white;
}

/* Navbar */
.nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 60px;
}

.nav h2{
    color:#3b82f6;
}

.nav a{
    color:white;
    text-decoration:none;
    margin-left:20px;
    font-size:14px;
}

/* Hero */
.hero{
    text-align:center;
    margin-top:120px;
}

.hero h1{
    font-size:48px;
    margin-bottom:10px;
}

.hero span{
    color:#3b82f6;
}

.hero p{
    color:#cbd5f5;
    margin-bottom:30px;
}

.btn{
    padding:12px 22px;
    margin:5px;
    border:none;
    cursor:pointer;
    border-radius:5px;
}

.primary{
    background:#3b82f6;
    color:white;
}

.secondary{
    background:#1e293b;
    color:white;
    border:1px solid #3b82f6;
}

/* Features */
.features{
    display:flex;
    justify-content:center;
    gap:25px;
    margin-top:100px;
}

.card{
    background:#1e293b;
    padding:25px;
    width:260px;
    border-radius:12px;
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    margin-bottom:10px;
}

.card p{
    color:#cbd5f5;
    font-size:14px;
}

/* Footer */
.footer{
    text-align:center;
    margin-top:100px;
    padding:20px;
    color:#888;
    font-size:12px;
}

</style>

</head>

<body>

<!-- Navbar -->
<div class="nav">
    <h2>SkillMentor</h2>

    <div>
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    </div>
</div>

<!-- Hero -->
<div class="hero">
    <h1>Crack Your <span>Dream Job</span></h1>

    <p>Practice mock interviews with real mentors and get actionable feedback</p>

    <a href="/register">
        <button class="btn primary">Get Started</button>
    </a>

    <a href="/login">
        <button class="btn secondary">Login</button>
    </a>
</div>

<!-- Features -->
<div class="features">

    <div class="card">
        <h3>🎯 Mock Interviews</h3>
        <p>Practice with experienced mentors from top companies</p>
    </div>

    <div class="card">
        <h3>📊 Performance Insights</h3>
        <p>Track your progress with detailed feedback reports</p>
    </div>

    <div class="card">
        <h3>🚀 Career Growth</h3>
        <p>Improve your skills and boost your confidence</p>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    © {{ date('Y') }} SkillMentor. All rights reserved.
</div>

</body>
</html>