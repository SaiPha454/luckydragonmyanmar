@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mx-auto" style="width: 400px">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session()->has('success'))
    <div class="alert  mx-auto" style="width: 400px;background-color:rgb(55, 161, 55)">
        {{session()->get('success')}}
    </div>
@endif

@if (session()->has('orderSuccess'))
    <div class="alert alert-success  mx-auto" style="text-align: center">
        {{session()->get('orderSuccess')}}
    </div>
@endif

@if (session()->has('customError'))

    <div class="alert alert-danger  mx-auto" style="width: 400px;">
        {{session()->get('customError')}}
    </div>

@endif

