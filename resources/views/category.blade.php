<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9; 
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: #007bff;
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #dddddd;
            color: #333;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        tr:last-child td {
            border-bottom: none;
        }

        td:first-child {
            width: 10%;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>

        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>