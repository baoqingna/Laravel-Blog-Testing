@extends('layouts.master')

@section('EditpageHeader')
<header class="masthead" style="background-image: url('img/for2.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{config('app.name')}}/Edit</h1>
                    {{-- <span class="subheading">A Blog Theme (kuno) by Start Bootstrap</span> --}}
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('formEdit')

{!! Form::model($blog) !!}
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
    {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection
