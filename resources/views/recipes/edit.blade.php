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
    <div class="container well" style="margin-top: 200px">
        {!! Form::open(['action'=>['RecipeController@update',$recipe->id],'method'=>'Post','enctype'=>'multipart/form-data']) !!}
        <div class=”form-group”>
            {{ Form::label('title','Recipe') }}
            {{ Form::text ('title',$recipe->name, ['class'=>'form-control','placeholder'=>'Recipe Name']) }}
            <br>
            {{ Form::label('title','Category') }}
            {{ Form::text ('category',$recipe->category, ['class'=>'form-control','placeholder'=>'Category Name']) }}
            <br>
            {{ Form::textarea ('description',$recipe->description, ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Description']) }}
            <br>
            {{Form::hidden('_method','PUT')}}
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div></div>
@endsection
