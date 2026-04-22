<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Feedback</h2>

<form method="POST" action="/interview/feedback">
@csrf

<input type="hidden" name="interview_id" value="{{ $interview->id }}">

<label>Rating</label>
<input type="number" name="rating" min="1" max="5">

<label>Comments</label>
<textarea name="comments"></textarea>

<button>Submit</button>

</form>
</body>
</html>