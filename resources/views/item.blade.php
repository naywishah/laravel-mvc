<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse; 
        }

        th {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd; 
        }

        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd; 
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>stock</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id }}</td>    
            <td>{{ $item->name}}</td>
            <td>{{ $item->price}}</td>
            <td>{{ $item->stock}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>