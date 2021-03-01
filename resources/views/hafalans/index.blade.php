<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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
        .p-rating .p-rating-star:hover~.p-rating-star {
            color: transparent;
        }
        /*
Make all previous stars selected when hover on a star
Note that we use `flex-direction: row-reverse` on the container
*/
        
        .p-rating .p-rating-star:hover:before,
        .p-rating .p-rating-star:hover~.p-rating-star:before {
            color: #f4f814;
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
        
        img {
            position: absolute;
            top: 60px;
            left: 225px;
        }
    </style>
    <title>Input Hafalan Santri</title>
</head>

<body>

    <div class="container">
        <h2 class="alert alert-primary text-center mt-5 inline"> Input Hafalan</h2>
        <a href="">
            <img src="https://img.icons8.com/ios-glyphs/45/000000/arrow-pointing-left--v2.png" />
        </a>

        <form action="">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="Pilih Santri">Pilih Santri</label>
                    </div>
                    <div class="col-md-9 ml-0">
                        <select name="" id="" class="form-control col-5">
                            <option value="">Murayama</option>
                            <option value="">Nandeska</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <h4>Mulai Dari</h4>
        <div class="row">
            <div class="col-md-6-inline ml-3">
                <div class="form-group">
                    <label for="Awal Surah">Pilih Surah</label>
                    <input type="text" class="form-control" placeholder="Masukan surah awal" id="Awal Surah">
                </div>
            </div>
            <div class="col-md-6-inline ml-5">
                <div class="form-group">
                    <label for="Pilih Ayat">Pilih Ayat</label>
                    <input type="text" class="form-control" placeholder="Masukan surah akhir" id="Pilih Ayat">
                </div>
            </div>
        </div>

        <h4>Sampai Dengan</h4>
        <div class="row">
            <div class="col-md-6-inline ml-3">
                <div class="form-group">
                    <label for="Pilih Surah">Pilih Surah</label>
                    <input type="text" class="form-control" placeholder="Masukan surah awal" id="Pilih Surah">
                </div>
            </div>
            <div class="col-md-6-inline ml-5">
                <div class="form-group">
                    <label for="Akhir Ayat">Pilih Ayat</label>
                    <input type="text" class="form-control" placeholder="Masukan surah akhir" id="Akhir Ayat">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Keterangan</label>
            <textarea name="" id="" class="form-control col-10"></textarea>

        </div>

        <div class="form-group mr-5">
            <label for="" class="text-center" style="text-align: center;">Hasil Setoran</label>
            <div class="p-rating mr-5">
                <button class="p-rating-star">☆</button>
                <button class="p-rating-star">☆</button>
                <button class="p-rating-star">☆</button>
                <button class="p-rating-star">☆</button>
                <button class="p-rating-star">★</button>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg btn-block col-10">SIMPAN</button>
    </div>






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