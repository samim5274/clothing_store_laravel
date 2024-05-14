<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-sub-category</title>
    <style>
        div{
            margin: 50px;
            background-color: rgb(237, 237, 237);
            padding: 20px;
            text-align: center;
        }
        select, input, button{
            font-size: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
            border: none;
        }
        option{
            font-size: 1rem;
        }
        button{
            color: #fff;
            background-color: rgb(96, 192, 255);;
        }
    </style>
</head>
<body>
    <div>
        <form action="/subcategorys" method="POST" enctype="multipart/form-data">
            @csrf
            <select name="cbxCategory" id="subCategory">
                <option value="1">Boys</option>
                <option value="2">Girl</option>
                <option value="3">Infant</option>
                <option value="4">Men</option>
                <option value="5">Women</option>
            </select>
            <input type="text" name="SubCategory" placeholder="Enter sub category">
            <button>Save</button>
        </form>
    </div>
</body>
</html>