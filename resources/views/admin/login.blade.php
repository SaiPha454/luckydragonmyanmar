<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminstation Login</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_css/login.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body >
    <div class="login-div" style="width: 100%;height:100%;overflow:hidden">
        <div class="row">
            <div class="col-2 col-md-4"></div>

            <div class="col-8 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Login To Admin</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('login.login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type='email' class="form-control" placeholder="Email"
                                name="email" id="login-admin-name" >
                            </div>
                            <div class="form-group">
                                <input type='password' class='form-control' placeholder='Password'
                                name='password' id="login-admin-password" >
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary float-right">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-2 col-md-4"></div>
        </div>
    </div>
</body>
</html>
