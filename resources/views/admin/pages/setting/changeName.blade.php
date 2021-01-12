@extends('admin.adminLayout.master')

@section('content')


<div class="container mt-5">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">

            <form action="{{route('admin.setting.update.name')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h4>Change Name</h4>
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$info->Name}}">
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
