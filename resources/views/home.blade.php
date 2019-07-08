@extends('layout')
<style>
    body{

    }

    header{
        height: 650px;
        max-width: 100%;
        background-image: url({{url('c3.jpg')}});
        background-size: 100% 100%
    }
    .checked {
        color: orange;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="container" style="margin: 100px auto; width: 100%;">


        @foreach($recipes as $recipe)
            <div class="container">
                <div class="row main">
                    <div class="col-md-8 image-element ">
                        <div class="img-wrap">
                            <img style="width:100%; height: 400px" src="storage/cover_images/{{$recipe->picture}}">
                        </div>
                    </div>
                    <div class="col-md-4 text-element">
                        <div class="text-content" style="height: 150px">
                            <h1 class="mbr-title mbr-fonts-style align-left" style="font-family: 'Bernard MT Condensed'">{{$recipe->name}}</h1>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <div class="mbr-section-text">
                                <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-left display-7">
                                    {{date_format($recipe->created_at, 'H:i / d-m-Y')}}</p>
                                <p>{{$recipe->short_d}} ...</p>
                            </div>
                        </div>
                        <div class="mbr-section-btn pt-3 align-left">
                            <a style="margin-top: 100px" class="btn btn-md btn-warning display-4"href="recipes/{{$recipe->id}}">View More</a>
                        </div>

                    </div>
                </div>
            </div>

            <hr>

        <!--<div class="row well well-lg">
            <div class="col-sm-4">
                <img style="width:100%" src="storage/cover_images/{{$recipe->picture}}">
            </div>
            <div class="col-sm-8" >
                <a href="recipes/{{$recipe->id}}">{{$recipe->name}}</a>
                <small>{{$recipe->created_at}}</small>
            </div>
        </div>-->
        @endforeach
    </div>
@endsection