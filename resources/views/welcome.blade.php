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
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><b>INABATUL</b> QUR'AN</h1>
                <p>KOTA DUMAI</p>
                <br>
                <span class="text-light">Copyright &copy 2022 - Team</span>
            </div>
        </div>
    </div>
      <div class="container">
    {{-- Card --}}
            <div class="box shadow">
                <h3 class="name">SD Qur'an<br>Inabah</h3>
                <a href="/sd" class="klik">Klik disini</a>
                <div class="circle">
                    <img src="{{asset('assets/images/logo sd.webp')}}" class="product">
                </div>
            </div>
    {{-- End Card --}}

    {{-- Card --}}
    <div class="box shadow">
        <h3 class="name">Yayasan<br>Inabah</h3>
        <a href="/yy" class="klik">Klik disini</a>
        <div class="circle">
            <img src="{{asset('assets/images/logo yayasan.webp')}}" class="product">
        </div>
    </div>
    {{-- End Card --}}

    {{-- Card --}}
        <div class="box shadow">
            <h3 class="name">Muamalah<br>Inabah</h3>
            <a href="/mm" class="klik">Klik disini</a>
            <div class="circle">
                <img src="{{asset('assets/images/logo muamalah.webp')}}" class="product">
            </div>
        </div>
{{-- End Card --}}
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
