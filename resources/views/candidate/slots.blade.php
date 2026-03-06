<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Available Slots</h2>

@foreach($slots as $slot)

<div>

<p>
{{ $slot->date }}
{{ $slot->start_time }} - {{ $slot->end_time }}
</p>

<form method="POST" action="/book-slot">

@csrf

<input type="hidden" name="slot_id" value="{{ $slot->id }}">
<input type="hidden" name="mentor_id" value="{{ $mentor->id }}">

<button type="submit">Book Interview</button>

</form>

</div>

@endforeach
</body>
</html>