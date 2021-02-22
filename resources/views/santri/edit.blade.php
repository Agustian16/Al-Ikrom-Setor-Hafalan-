<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
      <h1>Edit Data</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-lg-12">
          <form action="/santri/{{$santri->nis}}/update" method="POST">
            {{csrf_field()}}
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Santri</label>
              <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama"  placeholder="Nama" value="{{$santri->nama}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Tingkat</label>
              <input name="tingkat" type="text" class="form-control" nama="exampleInputEmail1" aria-describedby="tingkat"  placeholder="Tingkat" value="{{$santri->tingkat}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Id Rayon</label>
              <input name="id_rayon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_rayon" placeholder="ID Rayon" value="{{$santri->id_rayon}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="alamat" placeholder="Alamat" value="{{$santri->alamat}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Ayah</label>
              <input name="nama_ayah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_ayah" placeholder="Nama Ayah" value="{{$santri->nama_ayah}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Ibu</label>
              <input name="nama_ibu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_ibu" placeholder="Nama Ibu" value="{{$santri->nama_ibu}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="no_telp" placeholder="Nomor Telepon" value="{{$santri->no_telp}}">
            </div>

            <button type="submit" class="btn btn-warning  ">Update</button>
           
          </form>
        </div>  
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
 