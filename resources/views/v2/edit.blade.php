<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sepeda Motor ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Perubahan Sepeda Motor</h2><br />
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div><br>
@endif
<form method="post" action="{{action('MotorController@update', $id)}}">
{{csrf_field()}}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="merk">Merk Sepeda Motor:</label>
<input type="text" class="form-control" name="merk" value="{{$motor->merk}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="price">Harga Sepeda Motor:</label>
<input type="text" class="form-control" name="price" value="{{$motor->price}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<div class="mb-2">Ketersediaan Sepeda Motor:</div>

<!--<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="stock" id="tersediaOptions1" value="1" {{ $motor->stock == 1? "checked":"" }}>
<label class="form-check-label" for="tersediaOptions1">Tersedia</label>
</div>
<div class="form-check form-check-inline">
 <input class="form-check-input" type="radio" name="stock" id="tersediaOptions2" value="0" {{ $motor->stock == 0? "checked":"" }}>
<label class="form-check-label" for="tersediaOptions2">Tidak Tersedia</label> 
</div> -->

@if ($motor->stock==1)
<input type="radio" name="stock" value="1" checked> Tersedia <br>
<input type="radio" name="stock" value="0"> Tidak Tersedia <br>
@elseif ($motor->stock==0)
<input type="radio" name="stock" value="1"> Tersedia <br>
<input type="radio" name="stock" value="0" checked> Tidak Tersedia <br> 
@endif

</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="weight">Berat Sepeda Motor:</label>
<input type="text" class="form-control" name="weight" value="{{$motor->weight}}">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div>
<button type="submit" class="btn btn-success" style="margin-left:40px">Update Sepeda Motor</button>
</div>
<div>
<a href="{{action('MotorController@index')}}" class="btn btn-danger" style="margin-left:20px">Batal</a>
</div>
</div>
</form>
</div>
</body>
</html>