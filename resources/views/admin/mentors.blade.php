<h2>All Mentors</h2>

<table border="1">

<tr>
<th>Name</th>
<th>Email</th>
<th>Company</th>
<th>Designation</th>
<th>Experience</th>
<th>Rate</th>
</tr>

@foreach($mentors as $mentor)

<tr>

<td>{{ $mentor->user->name }}</td>

<td>{{ $mentor->user->email }}</td>

<td>{{ $mentor->company }}</td>

<td>{{ $mentor->designation }}</td>

<td>{{ $mentor->experience_years }} years</td>

<td>${{ $mentor->hourly_rate }}</td>

</tr>

@endforeach

</table>