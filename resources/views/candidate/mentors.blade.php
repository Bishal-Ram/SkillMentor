<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Available Mentors</h1>

@foreach($mentors as $mentor)

<div style="border:1px solid #ccc; padding:10px; margin:10px">

<h3>{{ $mentor->user->name }}</h3>

<p>Company: {{ $mentor->company }}</p>

<p>Role: {{ $mentor->designation }}</p>

<p>Experience: {{ $mentor->experience_years }} years</p>

<p>Skills: {{ $mentor->skills }}</p>

<p>Price: ${{ $mentor->hourly_rate }}</p>

<a href="/mentor/{{ $mentor->id }}/slots">
View Available Slots
</a>

</div>

@endforeach
</body>
</html>