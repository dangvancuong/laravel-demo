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
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/quizzes/fast_food_smarts_rmq/650x350_fast_food_smarts_rmq.jpg" alt="...">
                        <div class="caption clearfix">
                            <h3>Thumbnail label</h3>
                            <p><strong>Giá: </strong><em> 200$</em></p>
                            <p>đánh giá: tốt</p>
                            <div class="pull-left price"><strong>price : </strong> $200</div>
                            <p><a href="#" class="btn btn-success pull-right" role="button">add cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection