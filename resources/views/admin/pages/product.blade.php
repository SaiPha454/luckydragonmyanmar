@extends('admin.layout.master')

@section('content')
    <div class="mt-5">
        <div style="width: 95%">
            <div class="mb-3">
                <h4 style="font-weight: bold"> Product </h4>
            </div>
            <div>
                <div style="display: inline-block">
                    <img style="width: 150px;border-radius:5px" src="{{asset($product->image)}}"
                    alt="product image">
                </div>
                <div style="display: inline-block;margin-left:20px;padding-left:30px">
                    <form action="{{route('admin.product.upload')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="display: inline-block">
                            <label for=""> Choose image to change product </label>
                            <div>
                                <input type="file" name="product-image"  accept="image/*" onchange="onSelectProductImage(event)">
                            </div>
                        </div>
                        <div style="display:none" id="product-preview-div">
                            <div style="display: inline-block" >
                                <img style="width: 150px;border-radius:5px" src="{{asset('appimg/product/product.jpg')}}"
                                alt="product image" id="product-preview-img">
                            </div>
                            <div style="display: inline-block;padding-left:30px">
                                <button class="btn btn-sm btn-primary">upload</button>
                            </div>

                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
