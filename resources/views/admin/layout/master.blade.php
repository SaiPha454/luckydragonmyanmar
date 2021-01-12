<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_css/admin.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="{{asset('js/customjs/admin.js')}}"></script>
</head>
<body style="width: 100%;overflow-x:hidden">
    <nav class="navbar navbar-expand" style="background-color: #5D5C60;padding:15px">
        <span class="navbar-brand">
            <a href="{{url('/')}}">
                <img style="width: 80px;margin-top:3px" src="{{asset('appimg/logo.png')}}" alt="">
            </a>
        </span>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">


            <ul class="navbar-nav" style="padding-left: 50px;">
                <li class="nav-item" >

                    <div class="dropdown" style="margin-right: 40px">
                        @if (Auth::user()->role =='superadmin')
                            <div style="display: inline-block;width:10px;height:10px;border-radius:50%;background-color:rgb(146, 211, 49)"></div>
                        @endif

                        <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img style="width: 30px" src="{{asset('appimg/admin/admin.png')}}" alt="">
                            <strong style="color: white"> {{$userinfo->Name}} </strong>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow-lg" style="width: 200px" aria-labelledby="dropdownMenuLink">

                            <div style="border-bottom:0.3px solid rgb(168, 167, 167);padding:8px">
                                <ion-icon name="log-out-outline" ></ion-icon>
                               <form action="{{route('admin.logout')}}" method="POST" style="display: inline-block">
                                @csrf
                                <button class="btn" style="border:none:outline:none;font-size: 18px;margin-left:8px;padding:0px">logout</button>
                               </form>
                            </div>

                            @if (Auth::user()->role=='superadmin')
                                <div style="border-bottom:0.3px solid rgb(168, 167, 167);padding:8px">
                                    <ion-icon name="information-circle-outline"></ion-icon>
                                    <a href="{{route('admin.manage.show.adminList')}}" style="font-size: 18px;margin-left:8px;color:black;text-decoration:none">manage admins</a>
                                </div>
                            @endif

                            <div style="padding:8px" >
                                <ion-icon name="settings-outline" ></ion-icon>
                                <a href="{{route('admin.setting.show.name')}}" style="font-size: 18px;margin-left:8px;color:black;text-decoration:none">setting</a>
                            </div>

                        </div>
                      </div>

                </li>


            </ul>

        </div>
    </nav>

    {{-- Variable Content --}}
    <div>
        <div class="row">
            <div class="col-3">
                <div class="mt-5 shadow-lg bg-white rounded"  style="margin-top: 30px;padding:20px;height:400px">
                    <div  class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.index')}}" class="side-bar-link"> Dashboard </a>
                        </div>
                    </div>
                    <div  class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.product')}}" class="side-bar-link"> Product </a>
                        </div>
                    </div>
                    <div  class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.order.pending')}}" class="side-bar-link"> Pending orders </a>
                        </div>
                    </div>
                    <div class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.order.confirm')}}" class="side-bar-link"> Confirm orders </a>
                        </div>
                    </div>
                    <div class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.order.completed')}}" class="side-bar-link"> Completed orders </a>
                        </div>
                    </div>
                    <div class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.price.show')}}" class="side-bar-link">  Change Price </a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-9">
                <div class="mt-3" style="text-align: center">
                    @include('admin.pages.inc.comment_inc')
                </div>
                @yield('content')
            </div>
        </div>

    </div>
    <div style="height: 50px"></div>
</body>
</html>
