<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Produk Berhasil Diupdate (Simulasi)</h1>
<p><strong>Nama:</strong> {{ $updated['name'] }}</p>
<p><strong>Harga:</strong> {{ $updated['price'] }}</p>
<p><strong>Stok:</strong> {{ $updated['stock'] }}</p>
<a href="{{ url('/products') }}">← Kembali ke daftar</a>
 
</body>
</html>