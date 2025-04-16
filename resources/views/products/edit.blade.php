<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Produk: {{ $product['name'] }}</h1>

<form action="{{ url('/products/'.$product['id']) }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ $product['name'] }}"><br>

    <label>Harga:</label><br>
    <input type="number" name="price" value="{{ $product['price'] }}"><br>

    <label>Stok:</label><br>
    <input type="number" name="stock" value="{{ $product['stock'] }}"><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>  
</body>
</html>

