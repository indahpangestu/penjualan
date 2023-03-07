<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sistem Penjualan ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Perubahan Produk</h2><br />
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div><br />
@endif
<form method="post" action="{{action('ProductController@update', $id)}}">
{{csrf_field()}}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Name:</label>
<input type="text" class="form-control" name="name" value="{{$product->name}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="price">Price:</label>
<input type="text" class="form-control" name="price" value="{{$product->price}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="stok">Stok:</label>
<input type="text" class="form-control" name="stok" value="{{$product->stok}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div>
<button type="submit" class="btn btn-success" style="margin-left:40px">Update Produk</button>
</div>
<div>
<a href="{{action('ProductController@index')}}" class="btn btn-danger" style="margin-left:40px">Batal</a>
</div>
</div>
</form>
</div>
</body>
</html>