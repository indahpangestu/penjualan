<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sistem Penjualan ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Detail Produk</h2><br />
<table width="500px" align="center" class="table-striped">
<tr>
        <td>Kode Barang</td>
        <td>:</td>
        <td>{{$product->id}}</td>
    </tr>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td>{{$product->name}}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td>{{number_format ($product['price'],0)}}</td>
    </tr>
    <tr>
        <td>Jumlah Barang</td>
        <td>:</td>
        <td>{{$product->stok}}</td>
    </tr>
    <tr>
        <td>Data Ditambahkan</td>
        <td>:</td>
        <td>{{$product->created_at}}</td>
    </tr>
    <tr>
        <td>Data Terakhir Diedit</td>
        <td>:</td>
        <td>{{$product->updated_at}}</td>
    </tr>
</table>
<div align='center'>
<a href="{{action('ProductController@index', $product['id'])}}" class="btn btn-primary" >Kembali</a>
</div>
</div>
</body>
</html>