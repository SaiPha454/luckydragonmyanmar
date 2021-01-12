@extends('admin.layout.master')

@section('content')
    <div class="mt-5">

            {{-- Content one --}}

            <div class="mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="width:80%;padding:20px" >
                <div>
                    <h4>First content</h4>
                </div>
                <div >
                    <p class="content-demo">
                        @if ($contentOne)
                        {{$contentOne->content}}
                        @endif
                    </p>
                </div>
                <div class="mt-3 mb-5">
                    <a class="btn btn-sm btn-primary float-right" href="{{route('admin.content.edit',$contentOne->section)}}">Edit</a>
                </div>
            </div>
            {{-- Content two --}}

            <div class="mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="width:80%;padding:20px" >
                <div>
                    <h4>Second content</h4>
                </div>
                <div >
                    <p class="content-demo">
                      @if ($contentTwo)
                      {{$contentTwo->content}}
                      @endif
                    </p>
                </div>
                <div class="mt-3 mb-5">
                    <a class="btn btn-sm btn-primary float-right" href="{{route('admin.content.edit',$contentTwo->section)}}">Edit</a>
                </div>
            </div>


        <hr>

        {{-- Manage comments UI --}}
        <div class="container mt-5">
            <div class="mx-auto" style="width: 75%">

                <div>
                    <h3>Manage Conmments</h3>
                </div>
                {{-- add comment button --}}
                <div class="mt-3" style="text-align:center">
                    <a href="{{route('admin.create.show.comment')}}"  class="btn" style="background-color: #6798EC;
                    text-decoration:none;color:white;font-size:18px">
                            <ion-icon name="add-circle" size="large" style="vertical-align: middle"></ion-icon>
                            <span style="vertical-align: middle">Add comment</span>
                    </a>
                </div>

                {{-- comments --}}
                <div class="mt-5">

                    @foreach ($comments as $comment)
                    <div class="ad-comment shadow-lg  bg-white rounded mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{asset($comment->image)}}"
                                style="width: 60px" alt="Comment">
                            </div>
                            <div class="col-10">
                                <div>
                                    <strong>{{$comment->Name}}</strong>
                                </div>
                                <div class="mt-3">
                                    <p>{{$comment->comment }}</p>
                                    <p> <span> {{$comment->date}} </span> </p>
                                </div>
                                <div>
                                    <form action="{{route('admin.delete.comment',$comment->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-sm btn-danger float-right"> delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
