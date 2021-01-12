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

    {{-- Variable Content --}}
    <div>
        <div class="row">
            <div class="col-3">
                <div class="mt-5 shadow-lg bg-white rounded"  style="margin-top: 30px;padding:20px;height:400px">
                    <div  class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.index')}}" class="side-bar-link"> Home </a>
                        </div>
                    </div>
                    <div  class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.setting.show.name')}}" class="side-bar-link"> Change Name </a>
                        </div>
                    </div>
                    <div  class="bg-primary side-bar-nav">
                        <div class="pl-3">
                            <a href="{{route('admin.setting.show.password')}}" class="side-bar-link"> Change Password </a>
                        </div>
                    </div>

                    @if (Auth::user()->role =='superadmin')
                        <div class="bg-primary side-bar-nav">
                            <div class="pl-3">
                                <a href="{{route('admin.manage.show.register')}}" class="side-bar-link"> Register </a>
                            </div>
                        </div>
                    @endif
                    @if (Auth::user()->role =='superadmin')
                        <div class="bg-primary side-bar-nav">
                            <div class="pl-3">
                                <a href="{{route('admin.manage.show.adminList')}}" class="side-bar-link"> Admin list </a>
                            </div>
                        </div>
                    @endif



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
