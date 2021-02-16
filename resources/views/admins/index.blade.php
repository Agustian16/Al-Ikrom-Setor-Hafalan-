<!DOCTYPE html>
<html>
<head>
    <title>ini Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll"> --}}
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              
            </ul>
            <form class="d-flex">
             <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">  
                  <li class="nav-item dropdown active " id="navbarToggleExternalContent">
                    <a class="navbar-toggler-icon m-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Murobi</a></li>
                      <li><a class="dropdown-item" href="#">Santri</a></li>
                      {{-- <li><hr class="dropdown-divider"></li> --}}
                      <li><a class="dropdown-item" href="#">Rayon</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active arrow-circle-left" aria-current="page" href="#">Back</a>
                  </li>
             </ul>   
            </form>
          </div>
        </div>
      </nav>

      <div class="row m-5">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Santri</h5>
              <p class="card-text">1</p>
              <p class="card-text">2</p>
              <p class="card-text">3</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Santri Tasmi</h5>
              <p class="card-text">1</p>
              <p class="card-text">2</p>
              <p class="card-text">3</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
        </div>
      </div>

      <div class="card text-center m-5">
        
        <div class="card-body">
          <h5 class="card-title">Statistik Hafalan Santri</h5>
          <p class="card-text">1</p>
          
        </div>
      </div>

<div class="container">
    @yield('content')
</div>
   
</body>
</html>