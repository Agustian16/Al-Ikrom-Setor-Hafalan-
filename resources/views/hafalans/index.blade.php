<!DOCTYPE html>
<html>
<head>
    <title>Form Setoran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <div class="pull-left">
        <i class="fas fa-arrow-left"></i>
        <h4>Setoran Hafalan</h4>
        </div>
          {{-- <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll"> --}}
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              
            </ul>
            <form class="d-flex">
             <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">  
             </ul>   
            </form>
          </div>
        </div>
      </nav>

      <div class="row m-5">
        <div class="col-sm-6">
        <div class="card-body">
            <h5 class="card-title">Pilih Santri</h5>
            <div class="input-group mb-3">
              <select class="form-select" id="inputGroupSelect02">
              <option selected>Pilih Santri</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Mulai Dari</h5>
            <div class="input-group mb-3">
              <select class="form-select" id="inputGroupSelect02">
              <option selected>Pilih Surah</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <select class="form-select" id="inputGroupSelect02">
              <option selected>Pilih Ayat</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Sampai dengan</h5>
            <div class="input-group mb-3">
              <select class="form-select" id="inputGroupSelect02">
              <option selected>Pilih Surah</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <select class="form-select" id="inputGroupSelect02">
              <option selected>Pilih Ayat</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
        </div>
        </div>
      </div>

      <div class="row m-5">
        
        <div class="card-body">
          <h5 class="card-title">Catatan</h5>
          <Textarea class="form-control" style="height:150px"></Textarea>
          
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>

      

<div class="container">
    @yield('content')
</div>
   
</body>
</html>