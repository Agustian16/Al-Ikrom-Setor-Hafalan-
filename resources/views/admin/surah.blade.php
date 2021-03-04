
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
            <link rel="icon" type="image/png" href="../assets/img/favicon.png">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <title>
                AL-IKROM Hafalan by Santri Programmer Al-Ikrom
            </title>
            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
            <!-- CSS Files -->
            <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
            <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href="../assets/demo/demo.css" rel="stylesheet" />
            <!--Font Awesome CDN-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
            
        </head>

        @extends('data_table')

        <body class="">
            <div class="wrapper ">
                <div class="sidebar" data-color="white" data-active-color="danger">
                    <div class="logo">
                        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                            <div class="logo-image-small">
                                <img src="../assets/img/al ikrom.png">
                            </div>
                            <!-- <p>CT</p> -->
                        </a>
                        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                AL - IKROM
                <!-- <div class="logo-image-big">
                    <img src="../assets/img/logo-big.png">
                </div> -->
                </a>
                    </div>
                    <div class="sidebar-wrapper">
                        <ul class="nav">
                            <li>
                                <a href="./admin">
                                    <i class="nc-icon nc-bank"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="./santri">
                                    <i class="nc-icon nc-single-02"></i>
                                    <p>Santri</p>
                                </a>
                            </li>
                            <li>
                                <a href="./murobi">
                                    <i class="nc-icon nc-badge"></i>
                                    <p>Murobi/Mentor</p>
                                </a>
                            </li>
                            <li >
                                <a href="./rayon">
                                    <i class="nc-icon nc-tile-56"></i>
                                    <p>Rayon</p>
                                </a>
                            </li>
                            <li class="active ">
                                <a href="surah-quran">
                                    <i class="nc-icon nc-book-bookmark"></i>
                                    <p>Surah</p>
                                </a>
                            </li>
                            <li>
                                <a href="./mapel">
                                    <i class="nc-icon nc-single-copy-04"></i>
                                    <p>Mapel</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-panel">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                        <div class="container-fluid">
                            <div class="navbar-wrapper">
                                <div class="navbar-toggle">
                                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                                </div>
                                <a class="navbar-brand" href="javascript:;">SMK WIKRAMA 1 GARUT</a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                                <ul class="navbar-nav">
                                
                                    <li class="nav-item">
                                        <a class="nav-link btn-rotate" href="{{ Route('admin.index') }}">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <p>
                                                <span class="d-lg-none d-md-block">Logout</span>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                    <div class="content">
                        <div class="row">
                            
                        <div class="container">
                @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                    </div>
                    @endif
                
                <div class="row">
                    <div class="col-6">
                        <h1>Data Surah Al-Qur'an</h1>
                            </div>


        @php
        $i = 1;    
        @endphp

            <TABLE class="table table-hover table-bordered dataTable" id="data-table" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Surah</th>
                    <th>Jenis </th>
                    <th>Arti</th>
                    <th>Jumlah Ayat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($surahs as $s)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $s->nama_surah}}</td>
                    <td>{{ $s->jenis_surah}}</td>
                    <td>{{ $s->arti_surah}}</td>
                    <td>{{ $s->jumlah_ayat }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

                </div>
            </div>
            </div>
                </div>
                        

            <!-- Modal Create -->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/rayon/create" method="POST">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rayon</label>
                    <input name="nama_rayon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_rayon"  placeholder="Nama rayon">
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Pembimbing Rayon</label>
                    <input name="pembimbing_rayon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="pembimbing_rayon" placeholder="pembimbing_rayon" >
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                </div>
            </div>
            </div>   
            
                    <footer class="footer footer-black  footer-white ">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="credits ml-auto">
                                    <span class="copyright">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by Santri Al-Ikrom
                    </span>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <!-- Chart JS -->
            <script src="../assets/js/plugins/chartjs.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="../assets/js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
            <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
            <script src="../assets/demo/demo.js"></script>
            <script>
                $(document).ready(function() {
                    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                    demo.initChartsPages();
                });
            </script>
        </body>
    </html>
