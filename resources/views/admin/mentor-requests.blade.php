<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mentor Requests</h2>

@foreach($requests as $req)

<div>

<h3>{{ $req->user->name }}</h3>

<p>{{ $req->company }}</p>
<p>{{ $req->designation }}</p>

<form method="POST" action="/admin/approve-mentor">
@csrf
<input type="hidden" name="id" value="{{ $req->id }}">
<button>Approve</button>
</form>

</div>

@endforeach
</body>
</html>