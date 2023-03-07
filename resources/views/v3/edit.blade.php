<html>
    <head>
        <meta charset="utf-8">
        <title>05211840000043</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <br>
            <h2 align="center">Edit Bumbu Dapur Kode {{$tabel21->Kode}} </h2>
            <br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{action('Tabel21Controller@update', $Kode)}}">
            {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="namatabel21">Nama :</label>
                            <input type="text" class="form-control" name="namatabel21" value="{{$tabel21->namatabel21}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="jumlahtabel21">Jumlah :</label>
                            <input type="text" class="form-control" name="jumlahtabel21" value="{{$tabel21->jumlahtabel21}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="satuantabel21">Satuan :</label>
                            <select class="form-control" id="satuantabel21" name="satuantabel21" > 
                                @if ($tabel21->satuantabel21==1)
                                    <option value="1" selected> Kilogram </option>
                                    <option value="2"> Gram </option>
                                    <option value="3"> Miligram </option>
                                @elseif ($tabel21->satuantabel21==2)
                                    <option value="1"> Kilogram </option>
                                    <option value="2" selected> Gram </option>
                                    <option value="3"> Miligram </option>
                                @elseif ($tabel21->satuantabel21==3)
                                    <option value="1"> Kilogram </option>
                                    <option value="2" > Gram </option>
                                    <option value="3" selected> Miligram </option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-success" style="margin-left:38px"> Simpan </button>
                            <a href="{{ action('Tabel21Controller@index') }}" class="btn btn-danger" style="margin-left:38px"> Batal </a>
                        </div>
                    </div>

            </form>
        </div>
    </body>
</html>