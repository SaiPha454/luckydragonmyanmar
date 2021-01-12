@extends('admin.layout.master')

@section('content')
    <div class="mt-5">
        <div class="mx-auto" style="width: 80%">
            <form action="{{route('admin.content.update')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="20">{{$contentText->content}}</textarea>
                </div>
                    <input type="hidden" name='section' value="{{$contentText->section}}">
                <div class="form-group">
                    <button class="btn  btn-primary float-right">save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
