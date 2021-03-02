<!DOCTYPE html>
<html>
<head>
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <style>
        *{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
body {
  background: #fbf3ff;
} 
.container {
  position: absolute;
  max-width: 800px;
  height: 500px;
  margin: auto;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
} 
.myRightCtn {
  position: relative;
  background-image: linear-gradient(45deg, #f046ff, #9b00e8);
  border-radius: 25px;
  height: 100%;
  padding: 25px;
  color: rgb(192, 192, 192);
  font-size: 12px; 
  display: flex;
  justify-content: center;
  align-items: center;
}
.myLeftCtn {
  position: relative;
  background: #fff;
  border-radius: 25px;
  height: 100%;
  padding: 25px;
  padding-left: 50px;
}
.myLeftCtn header {
  color: blueviolet;
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 20px;
}
.row{
height: 100%;
} 
.myCard {
  position: relative;
  background: #fff;
  height: 100%;
  border-radius: 25px;
  -webkit-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
} 
.myRightCtn header {
  color: #fff;
  font-size: 44px;
}
.box {
  position: relative;
  margin: 20px;
  margin-bottom: 100px;
} 
.myLeftCtn .myInput {
  width: 230px;
  border-radius: 25px;
  padding: 10px;
  padding-left: 50px;
  border: none;
  -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
}
.myLeftCtn .myInput:focus {
  outline: none;
} 
.myForm {
  position: relative;
  margin-top: 20px;
  
} 
.myLeftCtn .butt {
  background: linear-gradient(45deg, #bb36fd, #9b00e8);
  color: #fff;
  width: 230px;
  border: none;
  border-radius: 25px;
  padding: 10px;
  -webkit-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
} 
.myLeftCtn .butt:hover {
  background: linear-gradient(45deg, #c85bff, #b726ff);
}
.myLeftCtn .butt:focus {
  outline: none;
} 
.myLeftCtn .fas {
  position: relative;
  color: #bb36fd;
  left: 36px;
} 
.butt_out {
  background: transparent;
  color: #fff;
  width: 120px;
  border: 2px solid#fff;
  border-radius: 25px;
  padding: 10px;
  -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
} 
.butt_out:hover {
  border: 2px solid#eecbff;
} 
.butt_out:focus {
  outline: none;
}


@media (min-width: 992px) { 
    .text-center {
            position: relative;       
            left: 200px;
    }
}
@media (min-width: 768px) { 
    .text-center {
            position: relative;       
            left: 200px;
    }
}

    </style>



</head>
<body> 
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form class="myForm text-center">
                            <header>Santri Tasmi</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <select class="myInput">
                                    <option>Pilih Santri</option>
                                  </select>
                                {{-- <input class="myInput" type="text" placeholder="Pilih Santri" id="Pilih Santri" required>  --}}
                            </div>

                            <div class="form-group">
                                <i class="fas fa-user-graduate"></i>
                                <input class="myInput" type="text" id="password" placeholder="Tingkat" required disabled> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-school"></i>
                                <input class="myInput" type="text" id="password" placeholder="Rayon" required disabled> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-quran"></i>
                                <select class="myInput">
                                    <option>Pilih Juz</option>
                                  </select>    
                            </div>

                            <div class="form-group">
                                <i class="fas fa-comment"></i>
                                <select class="myInput">
                                    <option>Keterangan</option>
                                    <option>Lulus</option>
                                    <option>Belum Lulus</option>
                                  </select>    
                            </div>
                            <input type="submit" class="butt" value="SIMPAN">
                            
                        </form>
                    </div>
                </div> 
                {{-- <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box"><header>Hello World!</header>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna 
                                aliqua. Ut enim ad minim veniam.</p>
                                <input type="button" class="butt_out" value="Learn More"/>
                            </div>
                                
                    </div>
                </div> --}}
            </div>
        </div>
</div>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>

