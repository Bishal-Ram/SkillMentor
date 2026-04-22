<h2>My Interviews</h2>

<table border="1">

<tr>
<th>Candidate</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
<th>Action</th>
</tr>

@foreach($interviews as $interview)

<tr>

<td>{{ $interview->candidate->name }}</td>

<td>{{ $interview->slot->date }}</td>

<td>
{{ $interview->slot->start_time }} -
{{ $interview->slot->end_time }}
</td>

<td>{{ $interview->status }}</td>

<td>

{{-- Step 1: Mark Completed --}}
@if($interview->status == 'scheduled')

<form method="POST" action="/interview/complete">
    @csrf
    <input type="hidden" name="id" value="{{ $interview->id }}">
    <button type="submit">Mark Completed</button>
</form>

@endif


{{-- Step 2: Add Feedback --}}
@if($interview->status == 'completed' && !$interview->feedback)

<a href="/interview/{{ $interview->id }}/feedback">
    <button>Add Feedback</button>
</a>

@endif


{{-- Step 3: Feedback Already Given --}}
@if($interview->feedback)

<p>✔ Feedback Submitted</p>

@endif

</td>

</tr>

@endforeach

</table>