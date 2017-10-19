@extends('layouts.master')
@section('title')
    Sản Phẩm Cao Cấp
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
    <div id="product">
        <div class="container">
            @foreach($products->chunk(3) as $product)
            <div class="row">
                @foreach($product as $pro)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$pro->imgPath}}" alt="ảnh thức ăn">
                        <div class="caption clearfix">
                            <h3>{{$pro->title}}</h3>
                            <p><strong>Giá: </strong><em> {{$pro->description}}</em></p>
                            <div class="pull-left price"><strong>price : </strong> {{$pro->price}}$</div>
                            <p><a href="#" class="btn btn-success pull-right" role="button">add cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

@endsection