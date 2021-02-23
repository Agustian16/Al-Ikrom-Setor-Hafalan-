<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>