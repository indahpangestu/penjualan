<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sistem Penjualan ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Penambahan Produk</h2><br/>
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
    </ul>
    </div><br />
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
    </div><br />
@endif 
<form method="post" action="{{url('v1')}}">
{{csrf_field()}} 
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Nama:</label>
<input type="text" class="form-control" name="name">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="price">Harga:</label>
<input type="text" class="form-control" name="price">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="stok">Jumlah Barang:</label>
<input type="text" class="form-control" name="stok">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div>
<button type="submit" class="btn btn-success" style="margin-left:40px">Tambahkan Produk</button>
</div>
<div>
<a href="{{action('ProductController@index')}}" class="btn btn-danger" style="margin-left:40px">Batal</a>
</div>
</div>
</form>
</div>
</body>
</html> 
