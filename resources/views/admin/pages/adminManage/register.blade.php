@extends('admin.adminLayout.master')

@section('content')


<div class="container mt-5">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">

            <form action="{{route('admin.manage.register')}}" method="POST">
                @csrf
                <h4>Add new admin</h4>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <select name="role" id="" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="superadmin">SuperAdmin</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn float-right btn-primary">Add</button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>


@endsection
