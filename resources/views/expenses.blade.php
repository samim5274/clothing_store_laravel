<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Details</title>
</head>
<body>
    
@if(session()->has('success'))
<h1>{{ session()->get('success') }}</h1>
@endif

<form method="POST" action="/save-expenses" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="Daily Expenses" placeholder="Enter  name">
    <input type="number" name="amount" value="100" placeholder="Enter  amount">
    <input type="date" name="date" value="2024-05-11">
    <button>Save</button>
</form>

<br><hr><br>

<form method="POST" action="/others-details" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="Jomsher Ali">
    <input type="number" name="uid" value="929904">
    <button>Save</button>
</form>
<br><hr>


<select name="" id="">
@foreach($objshow as $show)
    <option value="{{ $show['uid'] }}">{{ $show['uid'] }} / {{ $show['name'] }}</option>
@endforeach
</select>


</body>
</html>