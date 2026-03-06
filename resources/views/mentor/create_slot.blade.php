<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create Interview Slot</h2>

<form method="POST" action="/mentor/slots">

@csrf

<label>Date</label>
<input type="date" name="date">

<label>Start Time</label>
<input type="time" name="start_time">

<label>End Time</label>
<input type="time" name="end_time">

<button type="submit">Create Slot</button>

</form>
</body>
</html>