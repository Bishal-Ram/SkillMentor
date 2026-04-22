<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Apply as Mentor</h2>

<form method="POST" action="/apply-mentor">
@csrf

<input name="company" placeholder="Company">

<input name="designation" placeholder="Designation">

<input name="experience_years" placeholder="Experience">

<textarea name="skills" placeholder="Skills"></textarea>

<input name="hourly_rate" placeholder="Hourly Rate">

<textarea name="bio" placeholder="Bio"></textarea>

<button>Submit</button>

</form>
</body>
</html>