<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</head>

<body>
    <h2>Ket qua</h2>
    <table>
        <tr>
            <th> Tên </th>
            <th> Giá </th>
            <th> Đánh Giá </th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <th>{{ $product->name }}</th>
                <th>{{ $product->price }}</th>
                <th>{{ $product->rate }}</th>
            </tr>
        @endforeach
    </table>
</body>

</html>
