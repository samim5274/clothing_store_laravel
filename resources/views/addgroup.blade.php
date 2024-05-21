<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Group-Details</title>
</head>
<body>

@if(session()->has('success'))
<h4>{{ session()->get('success') }}</h4>
@endif
    
<form method="POST" action="/add-group" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Enter group name">
    <button>Save</button>
</form>
<br><hr><br>
<form method="POST" action="/add-sub-group" enctype="multipart/form-data">
    @csrf
    <select name="groupid" id="">
        @foreach($objShow as $show)
        <option value="{{ $show['id'] }}">{{ $obj2 = $show['name'] }}</option>
        @endforeach
    </select>
    <input type="text" name="subgroup" placeholder="Enter sub group name">
    <button>Save</button>
</form>
<br>

<table style="border: 1px solid black">
    <tr>
        <td style="border: 1px solid black">Group ID</td>
        <td style="border: 1px solid black">Group Name</td>
        <td style="border: 1px solid black">Sub Group</td>
    </tr>
    @foreach($objsubgroup as $show)
    <tr>        
        <td style="border: 1px solid black">{{ $show['groupid'] }}</td>
        <td style="border: 1px solid black">{{ $show['groupid'] }}</td>
        <td style="border: 1px solid black">{{ $show['subgroup'] }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>