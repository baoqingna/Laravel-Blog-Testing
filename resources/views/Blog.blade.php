@extends('layouts.master')

@section('form')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            {!! Form::open() !!}
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        {{Form::label('Blog Title')}}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Blog Title']) !!}
                        <p class="help-block text-danger"></p>
                    </div>
                </div><br>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        {{Form::label('Blog Description')}}
                        {!! Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Blog Description', 'rows' => '3']) !!}
                        <p class="help-block text-danger"></p>
                    </div>
                </div><br>

                <div id="success"></div>
                <div class="form-group">
                    {!! Form::submit('Add Post', ['class' => 'btn btn-primary']) !!}
                </div>

            </form>
            {!! Form::close() !!}


             <br>


            {{-- @foreach ($iterable as $key => $value) --}}
            <div class="post-preview">
                <a href="/">
                    <h2 class="post-title"> Man must explore, and this is exploration at its greatest</h2>
                    <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                    <p class="post-meta">
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </p>
                </a>
            </div>
            <hr><br>
            {{-- @endforeach --}}
        </div>
    </div>
</div>
@endsection
