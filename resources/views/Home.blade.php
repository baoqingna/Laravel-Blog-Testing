@extends('layouts.master')

@section('HomepageHeader')
<header class="masthead" style="background-image: url('img/for2.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{config('app.name')}}</h1>
                    <span class="subheading">A Blog Theme (kuno) by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('form')

{!! Form::open() !!}
<p>Fill out the form below to create new post!</p>
<div class="control-group">
    <div class="form-group floating-label-form-group controls">
        {{Form::label('Blog Title')}}
        {!! Form::text('blogTitle', null, ['class' => 'form-control', 'placeholder' => 'Blog Title']) !!}
        <p class="help-block text-danger"></p>
    </div>
</div><br>

<div class="control-group">
    <div class="form-group floating-label-form-group controls">
        {{Form::label('Blog Description')}}
        {!! Form::textarea('blogDesc', null, ['class' => 'form-control', 'placeholder' => 'Blog Description', 'rows' => '3']) !!}
        <p class="help-block text-danger"></p>
    </div>
</div><br>

<div id="success"></div>
<div class="form-group">
    {!! Form::submit('Add Post', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection

@section('list')

@foreach ($blogs as $blog)
<div class="post-preview">
    <a href="/">
        <h2 class="post-title">{{$blog->blogTitle}}</h2>
        <h3 class="post-subtitle">{{$blog->blogDesc}}</h3>
        <p>
            {{'Created (' .$blog->created_at. ')'}}
            {{'/ Updated (' .$blog->updated_at. ')'}}</p>
        <p class="post-meta">
            <a href="{{url('blog/' .$blog->id. '/edit')}}">Edit</a>
            <a href="{{url('blog/' .$blog->id. '/destroy')}}">Delete</a>
        </p>
    </a>
</div>
<hr><br>
@endforeach

@endsection
