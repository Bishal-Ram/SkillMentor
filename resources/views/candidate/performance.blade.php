<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Performance Report</h2>

@if($interviews->isEmpty())
    <p>No interviews yet</p>
@endif

@foreach($interviews as $interview)

@if($interview->feedback)

<div style="border:1px solid #ccc; padding:10px; margin:10px">

    <h3>Mentor: {{ $interview->mentor->user->name }}</h3>

    <p>Date: {{ $interview->slot->date }}</p>

    <p>Rating: ⭐ {{ $interview->feedback->rating }}/5</p>

    <p>Feedback: {{ $interview->feedback->comments }}</p>
    <a href="/performance/pdf">
    <button>Download Performance Report PDF</button>
</a>

</div>

@endif

@endforeach
</body>
</html>