<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: Sepeda Motor ::..</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center" >Detail Sepeda Motor</h2><br />
<table width="500px" align="center" class="table-striped">
<tr>
        <td>Kode Sepeda Motor</td>
        <td>:</td>
        <td>{{$motor->id}}</td>
    </tr>
    <tr>
        <td>Merk Sepeda Motor</td>
        <td>:</td>
        <td>{{$motor->merk}}</td>
    </tr>
    <tr>
        <td>Harga Sepeda Motor</td>
        <td>:</td>
        <td>{{number_format ($motor['price'],0)}}</td>
    </tr>
    <tr>
        <td>Ketersediaan Sepeda Motor</td>
        <td>:</td>
        <td>{{$motor->stock = $motor['stock'] == 1 ? 'Tersedia':'Tidak Tersedia'}}</td>
    </tr>
    <tr>
        <td>Berat Sepeda Motor</td>
        <td>:</td>
        <td>{{$motor->weight}}</td>
    </tr>
    <tr>
        <td>Data Ditambahkan</td>
        <td>:</td>
        <td>{{$motor->created_at}}</td>
    </tr>
    <tr>
        <td>Data Terakhir Diedit</td>
        <td>:</td>
        <td>{{$motor->updated_at}}</td>
    </tr>
</table>
<div align='center'>
<a href="{{action('MotorController@index', $motor['id'])}}" class="btn btn-primary" >Kembali</a>
</div>
</div>
</body>
</html>