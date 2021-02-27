<!DOCTYPE html>
<html>
<head>
    <title>Form Setoran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<style>
.p-rating {
    /* Center the content */
    align-items: center;
    display: flex;
    justify-content: center;

    flex-direction: row-reverse;

    font-size: 32px;
}

.p-rating .p-rating-star:hover,
.p-rating .p-rating-star:hover ~ .p-rating-star {
    color: transparent;
}

/*
Make all previous stars selected when hover on a star
Note that we use `flex-direction: row-reverse` on the container
*/
.p-rating .p-rating-star:hover:before,
.p-rating .p-rating-star:hover ~ .p-rating-star:before {
    color: #00449e;
    content: '\2605';
    left: 0;
    position: absolute;
}

.p-rating-star {
    /* Reset styles for button */
    background-color: transparent;
    border: transparent;
    margin: 0 2px;
    padding: 0;

    /* Used to position the hover state */
    position: relative;
}
.container {
  position: absolute;
  width: 520px;
  height: 692px;
  left: 423px;
  top: 76px;
}

.navbar {
    position: relative;
    z-index: 1;
}

.navbar-brand {
    font-family: 'Viga';
    font-size: 32px;
}

.nav-link {
    text-transform: uppercase;
    margin-right: 30px;
}

/* Dekstop Version */

@media (min-width: 992px) {
    .navbar-brand,
    .nav-link {
        color: white !important;
        text-shadow: 1px 1px 1px rgb(0, 0, 0, 0.7);
    }
    .nav-link {
        text-transform: uppercase;
        margin-right: 30px;
    }
    .nav-link:hover::after {
        content: '';
        display: block;
        border-bottom: 3px solid #0B63DC;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;
    }


    body{
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto;
        background-color: #f5f6f1;
    }
    .lista{
        justify-content: center;
    }
    .lista ol{
        list-style: none;
        counter-reset: my-counter;
        margin: 0rem;
        padding:  0rem 0rem 0rem 1.5rem;
    }
    .lista li{
        counter-increment: my-counter;
      /*  border-bottom: solid 2px #cdcdcd; */
        padding-top: 2rem;
        padding-bottom: 1rem;
        display: grid;
        grid-template-columns: auto 1fr;
        grid-template-rows: auto;
        grid-template-areas: "icon:text";
        align-items: start;
        justify-content: center;
    }
   
    .card{
        grid-area: text;
        margin-left: 4rem;
        border-radius: 0px;
        box-shadow: 0 0 5px 1px #ddd;
        margin-top: 0.5rem;
    }
    .card-html .card-header:after {
        right: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-right-color: #e65127;
        border-width: 10px;
        top: 10px;
    }
    .card-css .card-header:after {
        right: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-right-color: #379ad6;
        border-width: 10px;
        top: 10px;
    }
    .card-js .card-header:after {
        right: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-right-color: #f2bf26;
        border-width: 10px;
        top: 10px;
    }
    .card-php .card-header:after {
        right: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-right-color: #8b92bd;
        border-width: 10px;
        top: 10px;
    }
    .card-bootstrap .card-header:after {
        right: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-right-color: #7952b3;
        border-width: 10px;
        top: 10px;
    }
    .card .card-header{
        background-color: #8abe3e;
        color: #fff;
        font-size: 22px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
    }
    .btn-success{
        background-color: #8abe3e;
        color: #fff;
        border-color: #8abe3e;
        border-radius: 0px;
    }
    .card-css .card-header, .card-css .btn-success{
        background-color: #379ad6;
        border-color: #379ad6;
    }
    .card-html .card-header, .card-html .btn-success{
        background-color: #e65127;
        border-color: #e65127;
    }
    .card-js .card-header, .card-js .btn-success{
        background-color: #f2bf26;
        border-color: #f2bf26;
    }
    .card-bootstrap .card-header, .card-bootstrap .btn-success{
        background-color: #7952b3;
        border-color: #7952b3;
    }
    .card-php .card-header, .card-php .btn-success{
        background-color: #8b92bd;
        border-color: #8b92bd;
    }
</style>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a0cff0;">
      
        <div class="container-fluid">
        
        <img src="https://img.icons8.com/material-rounded/24/000000/arrow-pointing-left.png"/>
        <div class="card-body">
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
        <div class="card card-bootstrap">
          <div class="card-header">
            <i class="fab fa-bimobject"></i> PILIH SANTRI
          </div>
              <div class="card-body">
                <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02">
                <option selected>Pilih Santri</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            </div>
            <div class="clearfix">                       
            </div>
          </div>

          <div class="card card-php">
          <div class="card-header">
            <i class="fab fa-php"></i> MULAI DARI
          </div>
              <div class="card-body">
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
            <div class="clearfix">                       
            </div>
          </div>

          <div class="card card-js">
          <div class="card-header">
            <i class="fab fa-js-square"></i> SAMPAI DENGAN
          </div>
              <div class="card-body">
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
            <div class="clearfix">                       
            </div>
          </div>

        </div>
        </div>
      </div>

      <div class="row m-5">
        
        <div class="card-body text-center">
          <h5 class="card-title">Catatan</h5>
          <Textarea class="form-control" style="height:150px"></Textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title">Hasil Setoran</h5>
          <div class="p-rating">
            <button class="p-rating-star">☆</button>
            <button class="p-rating-star">☆</button>
            <button class="p-rating-star">☆</button>
            <button class="p-rating-star">☆</button>
            <button class="p-rating-star">★</button>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="width:150px">Simpan</button>
        </div>
      </div>

      </div>

<div class="container">
    @yield('content')
</div>
   
</body>
</html>