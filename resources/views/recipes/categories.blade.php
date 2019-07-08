@extends('layout')
<style>
    .col-sm-5{
        background-size: cover;
        margin: 10px;
        background-color: #1b4b72;
        height: 270px;
        width: 350px;
    }
    .col-breakfast{
        background-image: url({{url('appetizers.jpg')}});
    }
    .col-lunch{
        background-image: url({{url('main_dishes.jpg')}});
    }
    .col-desserts{
        background-image: url({{url('desserts.jpg')}});
    }
    .col-appetizers{
        background-image: url({{url('appetizersbg.jpg')}});
    }
    .ac{
        border: none;
        color: white;
        height: 270px;
        width: 450px;
        text-align: center;

    }
</style>
@section('content')

    <div class="container" style="margin-top: 120px">
        <div class="col-sm-5 col-breakfast">
            <a href="http://localhost/Proj/Cooking/public/recipes/breakfast" class="btn ac"><p style="margin-top: 115px; font-family:'Bernard MT Condensed'; font-size: 35px;">Breakfast and Brunch</p></a>
        </div>
        <div class="col-sm-5 col-lunch">
            <a href="http://localhost/Proj/Cooking/public/recipes/lunch" class="btn ac"><p style="margin-top: 115px; font-size: 35px; font-family:'Bernard MT Condensed';">Lunch</p></a>
        </div>
        <div class="col-sm-5 col-appetizers">
            <a href="http://localhost/Proj/Cooking/public/recipes/appetizers" class="btn ac"><p style="margin-top: 115px; font-size: 35px; font-family:'Bernard MT Condensed';">Appetizers and Snacks</p></a>
        </div>
        <div class="col-sm-5 col-desserts">
            <a href="http://localhost/Proj/Cooking/public/recipes/desserts" class="btn ac"><p style="margin-top: 115px; font-size: 35px; font-family:'Bernard MT Condensed';">Desserts</p></a>
        </div>
    </div>
@endsection