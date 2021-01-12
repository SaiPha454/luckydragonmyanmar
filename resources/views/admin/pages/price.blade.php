@extends('admin.layout.master')

@section('content')


<div class="container mt-5">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">

            <form action="{{route('admin.price.update')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h4>Change Price</h4>
                    <label for="">Cancel Price</label>
                    <input type="text" class="form-control" name="cancelPrice" value="{{$price->cancelPrice}}">
                </div>
                <div class="form-group">

                    <label for="">Current Price</label>
                    <input type="text" class="form-control" name="price" value="{{$price->price}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary">save</button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>


@endsection
