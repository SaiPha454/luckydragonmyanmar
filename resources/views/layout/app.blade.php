<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoscopes, Lucky , Tarot & Love Compatibility | Astrology.com | </title>
    <meta name="keywords" content="Horoscope tarot by Abhigya Anand and be good luck by the dragon necklace">
    <meta name="description" content="Horoscope tarot by Abhigya Anand and be good luck by the dragon necklace">
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_css/myapp.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset('js/customjs/taro.js')}}"></script>

    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body id="app_body" >
    <div class="container">

        {{-- Header Content --}}
        <div class="mt-3 mx-auto">
            <div class="mx-auto header-div"  >
                @include('admin.pages.inc.comment_inc')
                <div class="row">
                    <div class="col-4 col-md-3" style="padding: 0px">
                        <img src="{{asset('appimg/amulet-boy2.png')}}" class="img-fluid amulet-boy" alt="">
                    </div>

                    <div class="col-8 col-md-9" style="position: relative;">
                        <div style="text-align: center">
                            <img src="{{asset('appimg/logo.png')}}" class="logo" alt="">
                        </div>

                        <div  class="mx-auto">
                            <h2 class="header-text mx-auto" style="padding: 5px">
                                Abhigya Anand ရဲ့ နက္ခ ဗေဒင်ခန့်မှန်းခြင်း အခမဲ့
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Variable contents --}}
        <div>
           <div class="header-div main-content mx-auto" >

                @yield('content')
           </div>
        </div>


    </div>
</body>
</html>
