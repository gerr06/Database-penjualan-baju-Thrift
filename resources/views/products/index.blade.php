<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Baju Thrift</h1> 
@foreach($products as $product)
    <li>
        <a href="{{ url('/products/'.$product['id']) }}">
            {{ $product['name'] }} - Rp{{ $product['price'] }}
        </a>
        |
        <a href="{{ url('/products/'.$product['id'].'/edit') }}">Edit</a>
        |
        <a href="{{ url('/products/'.$product['id'].'/delete') }}">Hapus</a>
    </li>
@endforeach

</body>
</html>
