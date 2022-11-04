<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INABATUL QUR'AN</title>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  </head>
  <body>
  <div class="container shadow">
            <div class="row">
                <div class="col text-center text-light my-5">
                    <h1><b>INABATUL</b> <span style="background-color: white; padding:5px;" class="shadow text-dark rounded">QUR'AN</span></h1>
                    <p class="mt-3">Jl. Cendana NO.5 - Jaya Mukti - Kota Dumai</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <center>
                        <div class="box shadow">
                            <h4 class="name">SD Qur'an<br>Inabah</h4>
                            <a href="/sd" class="klik" target="_blank">Klik disini</a>
                            <div class="circle">
                                <img src="{{asset('assets/images/logo sd.webp')}}" class="product">
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <center>
                        <div class="box shadow">
                            <h4 class="name">Yayasan<br>Inabah</h4>
                            <a href="/yy" class="klik" target="_blank">Klik disini</a>
                            <div class="circle">
                                <img src="{{asset('assets/images/logo yayasan.webp')}}" class="product">
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <center>
                        <div class="box shadow">
                            <h4 class="name">Muamalah<br>Inabah</h4>
                            <a href="/mm" class="klik" target="_blank">Klik disini</a>
                            <div class="circle">
                                <img src="{{asset('assets/images/logo muamalah.webp')}}" class="product">
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col my-5 text-center text-light">
                    Copyright &copy TIM 2022
                </div>
            </div>
    </div>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vanilla-tilt.min.js')}}"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelector(".box"), {
            max: 25,
            speed: 400
        });

        //It also supports NodeList
        VanillaTilt.init(document.querySelectorAll(".box"));
    </script>
  </body>
</html>
