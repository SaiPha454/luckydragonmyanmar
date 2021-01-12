@extends('admin.adminLayout.master')

@section('content')


<div class="container mt-5">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h4>Admin lists</h4>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Eamil</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                        <th scope="col">Trash</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach ($admins as $admin)
                        <tr>
                            <th scope="row">{{$loop->index +1}}</th>
                            <td>{{$admin->Name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->role}}</td>
                            <td>
                                @if ($admin->role =='admin')
                                    <form action="{{route('admin.manage.makeSuper',$admin->id)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-sm btn-primary">make super</button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                @if ($admin->role =='admin' or Auth::user()->id ==$admin->id)
                                    <form action="{{route('admin.manage.deleteAdmin',$admin->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger">delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>


@endsection
