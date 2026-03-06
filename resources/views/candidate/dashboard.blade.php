<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Candidate Dashboard</h1>

<div>
    <h2>Hello {{ auth()->user()->name }}</h2>

    <div style="margin-top:20px">

        <a href="/mentors">
            <button>Browse Mentors</button>
        </a>

        <a href="/my-interviews">
            <button>My Interviews</button>
        </a>

        <a href="#">
            <button>Performance Report</button>
        </a>

    </div>

</div>
</body>
</html>