@extends('layout')
<style>
    .moe{
        background-image: url({{url('bg2.jpg')}});
        background-repeat:no-repeat;
        background-position:center;
        background-size:cover;
        padding:10px;
        width: 100%;
        height: 100%;
    }
    .container{
    }
</style>
@section('content')
    <div class="moe">
<div class="container well" style="margin-top: 150px">
    {!! Form::open(['action'=>'RecipeController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class=”form-group”>
        {{ Form::label('title','Recipe') }}
        {{ Form::text ('title','', ['class'=>'form-control','placeholder'=>'Recipe Name']) }}
        <br>
        {{ Form::label('title','Category') }}
    <!--{{ Form::select('category', array('desserts' => 'Dessert', 'appetizers' => 'Appetizers and Snacks', 'main-dishes' => 'Main Dishes'),['class'=>'form-control','placeholder'=>'Category Name'])}}-->
        {{ Form::text ('category','', ['class'=>'form-control','placeholder'=>'Category Name']) }}
        <br>
        {{ Form::textarea ('description','', ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Description']) }}
        <br>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div></div>
@endsection
