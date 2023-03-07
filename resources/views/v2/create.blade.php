<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sepeda Motor ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Penambahan Sepeda Motor</h2><br/>

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

<form method="post" action="{{url('v2')}}">
{{csrf_field()}}

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="merk">Merk Sepeda Motor:</label>
<input type="text" class="form-control" name="merk">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="price">Harga Sepeda Motor:</label>
<input type="text" class="form-control" name="price">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
     <div class="mb-2">Ketersediaan Sepeda Motor: </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="stock" id="tersediaOptions1" value="1">
        <label class="form-check-label" for="companyTypeOptions1">Tersedia</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="stock" id="tersediaOptions2" value="0">
        <label class="form-check-label" for="companyTypeOptions2">Tidak Tersedia</label>
    </div>
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="weight">Berat Sepeda Motor:</label>
<input type="text" class="form-control" name="weight">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div>
<button type="submit" class="btn btn-success" style="margin-left:30px">Tambahkan Sepeda Motor</button>
</div>
<div>
<a href="{{action('MotorController@index')}}" class="btn btn-danger" style="margin-left:20px">Batal</a>
</div>
</div>
</form>
</div>
</body>
</html>