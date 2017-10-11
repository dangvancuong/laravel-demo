@extends('layouts.master')
@section('title')
    shopping cart
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
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                            <p>...</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection