@extends('admin.layout.master')

@section('content')
    <div class="mt-5">

        <div class="mx-auto" style="width: 80%">
            <form action="{{route('admin.create.comment')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <img src="{{asset('appimg/comment/comment.png')}}" id="review-img"
                    style="width: 60px;border-radius:5px" alt="">
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <textarea placeholder="comment" class="form-control" name="comment" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="date" placeholder="date">
                </div>
                <div class="form-group">
                    <input type='file' name="profile"  onchange="onSelectImg(event)">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary float-right">create</button>
                </div>
            </form>
        </div>
    </div>


@endsection
