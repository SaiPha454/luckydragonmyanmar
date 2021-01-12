
@extends('admin.layout.master')

@section('content')
    <div class="mt-5">

        <div style="width: 95%">
            <div class="mb-3">
                <h4 style="font-weight: bold"> Confirmed orders </h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                        <th scope="col">Trash</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row"> {{$loop->index +1 }}</th>
                            <td>{{$order->Name}}</td>
                            <td>{{$order->Phone}}</td>
                            <td>{{explode(' ',$order->created_at)[0] }}</td>
                            <td>
                                <form action="{{route('admin.completeOrder',$order->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-primary">complete</button> </form> </td>
                            <td>
                                <form action="{{route('admin.deleteOrder',$order->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">delete</button></form> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


