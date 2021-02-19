<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Headmaster</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a0cff0;">
        <div class="container">
            <a class="navbar-brand" href="#">Al-Ikrom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="#">Dasboard <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Santri</a>
                    <a class="nav-item btn btn-primary button" href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->
    
      <br>
      <br>
      <div class="text-center">
        <img src="https://img.icons8.com/plasticine/100/000000/user-male.png" class="rounded" alt="Profile" />
      </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-">
                    <div class="lista">    
                        <li>
                            <div class="card card-bootstrap">
                                <div class="card-header">
                                    <i class="fab fa-bimobject"></i> JUMLAH SANTRI
                                </div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                <div class="card-footer">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <button class="btn btn-success">Botão de Acesso</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-php" style="right: 600px;">
                                <div class="card-header">
                                    <i class="fab fa-php"></i> SANTRI TASMI
                                </div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                                <div class="card-footer">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <button class="btn btn-success">Botão de Acesso</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>


        <section class="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="lista">
                        <ol>
                            <li>
                                <div class="card card-js">
                                    <div class="card-header">
                                        <i class="fab fa-js-square"></i> STATISTIK HAFALAN SANTRI
                                    </div>
                                    <div class="card-body">
                                        <img src="/download.png" alt="chart" style="height: 200px;">
                                    <div class="card-footer">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="float-right">
                                                <button class="btn btn-success">Botão de Acesso</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        



<style>

    /* Navbar */

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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>