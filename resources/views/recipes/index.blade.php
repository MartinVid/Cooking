
@extends('layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    header{
        height: 650px;
        max-width: 100%;
        background-image: url({{url('c3.jpg')}});
        background-size: 100% 100%
    }
    .naslov{
        text-align: left;
        padding-top: 110px;
        font-size: 180px;
        margin-left: 200px;
        color: whitesmoke;
    }
    .checked {
        color: orange;
    }
</style>

@section('content')
    <header>
        <div class="row">
            <div class="col-lg-12 naslov">
                <p style="font-family: 'Bernard MT Condensed'">Recipes</p>
            </div>
        </div>
    </header>
    <div class="container" style="margin: 100px auto; width: 100%;">


        @foreach($recipes as $recipe)
                <div class="row main">
                    <div class="col-md-8 image-element ">
                        <div class="img-wrap">
                            <img class="rounded" style="width:100%; height: 400px" src="storage/cover_images/{{$recipe->picture}}">
                        </div>
                    </div>
                    <div class="col-md-4 text-element">
                        <div class="text-content" style="height: 150px">
                            <h1 class="mbr-title mbr-fonts-style align-left" style="font-family:'Bernard MT Condensed'">{{$recipe->name}}</h1>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <div>
                                <p>{{date_format($recipe->created_at, 'H:i / d-m-Y')}}</p>
                            </div>
                            <p>{{$recipe->short_d}} ...</p>

                        </div>
                        <div>
                            <a style="margin-top: 100px" class="btn btn-lg btn-warning display-4" href="recipes/{{$recipe->id}}">View More</a>
                        </div>
                    </div>
                </div>
            <hr>

        @endforeach
            {{$recipes->links()}}
    </div>
@endsection