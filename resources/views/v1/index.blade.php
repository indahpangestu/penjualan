<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sistem Penjualan ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<br>
<h2 align="center" >Informasi Aksesoris</h2><br/>
@if (\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div><br />
@endif

<form method="GET" action="{{action('ProductController@cari')}}">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Barang">
        <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Cari</button>
        </div>
    </div>
</form>

<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Harga</th>
<th>Jumlah Barang</th>
<th colspan="3" align="center">Action</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{$product['id']}}</td>
<td>{{$product['name']}}</td>
<td align="right">{{number_format ($product['price'],0) }}</td>
<td>{{$product['stok']}}</td>
<td><a href="{{action('ProductController@show', $product['id'])}}"
class="btn btn-success">Detail</a></td>
<td><a href="{{action('ProductController@edit', $product['id'])}}"
class="btn btn-warning">Ubah</a></td>
<td>
<form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{$products->links() }}
</div>
<div align='center'>
<a href="{{action('ProductController@create', $product['id'])}}" class="btn btn-primary" >Tambah Produk Baru</a>
</div>
</body>
</html>