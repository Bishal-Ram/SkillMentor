<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>All Interviews</h2>

<table border="1">

<tr>
<th>Candidate</th>
<th>Mentor</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
</tr>

@foreach($interviews as $interview)

<tr>

<td>{{ $interview->candidate->name }}</td>

<td>{{ $interview->mentor->user->name }}</td>

<td>{{ $interview->slot->date }}</td>

<td>
{{ $interview->slot->start_time }}
-
{{ $interview->slot->end_time }}
</td>

<td>{{ $interview->status }}</td>

</tr>

@endforeach

</table>
</body>
</html>