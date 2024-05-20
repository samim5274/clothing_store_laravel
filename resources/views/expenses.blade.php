<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Detail</title>
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


</body>
</html>