<h1>{{ $product['name'] }}</h1>
<p>Harga: Rp{{ $product['price'] }}</p>
<p>Stok: {{ $product['stock'] }}</p>
<a href="{{ url('/products') }}">← Kembali ke daftar</a>
