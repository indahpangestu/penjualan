<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sepeda Motor ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <br>
<h2 align="center" >Informasi Sepeda Motor</h2><br/>
@if (\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div><br />
@endif

<form method="GET" action="{{ action('MotorController@find') }}">
<div class="input-group mb-3">
    <input type="text" class="form-control" name="keyword" placeholder="Masukkan Merk Sepeda Motor">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="submit">Cari</button>  
     </div>
  </div>
</form>

<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Merk</th>
<th>Harga</th>
<th>Ketersediaan</th> 
<th>Berat</th>
<th colspan="3" align="left">Action</th>
</tr>
</thead>
<tbody>
@foreach($motors as $motor)
<tr>
<td>{{$motor['id']}}</td>
<td>{{$motor['merk']}}</td>
<td>{{number_format ($motor['price'],0)}}</td> 
<td>{{$motors->stock = $motor['stock'] == 1 ? 'Tersedia':'Tidak Tersedia'}}</td>
<td>{{$motor['weight']}}</td>
<td><a href="{{action('MotorController@show', $motor['id'])}}"
class="btn btn-success">Detail</a></td>
<td><a href="{{action('MotorController@edit', $motor['id'])}}"
class="btn btn-warning">Ubah</a></td>
<td>
<form action="{{action('MotorController@destroy', $motor['id'])}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{$motors->links() }}
</div>
<div align='center'>
<a href="{{action('MotorController@create', $motor['id'])}}" class="btn btn-primary" >Tambah Sepeda Motor Baru</a>
</div>
</body>
</html>