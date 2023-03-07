<html>
  <head>
      <meta charset="utf-8">
      <title>05211840000043</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <br>
      <h2 align="center" >Daftar Bumbu Dapur</h2><br/>
      @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br />
      @endif

      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jumlah</th> 
            <th>Satuan</th>
            <th colspan="1" >Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tabel21s as $tabel21)
            <tr>
              <td>{{$tabel21['id']}}</td>
              <td>{{$tabel21['Kode']}}</td>
              <td>{{$tabel21['namatabel21']}}</td> 
              <td>{{$tabel21['jumlahtabel21']}}</td>
                @if ($tabel21['satuantabel21'] === 1)
                  <td> Kilogram </td>
                @elseif ($tabel21['satuantabel21'] === 2)
                  <td> Gram </td>
                @else
                  <td> Miligram </td>
                @endif

              <td><a href="{{action('Tabel21Controller@edit', $tabel21['id'])}}" class="btn btn-primary">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>