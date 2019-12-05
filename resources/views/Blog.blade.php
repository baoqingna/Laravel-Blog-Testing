@extends('layouts.master')

@section('form')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            {!! Form::open() !!}
            <div class="card-header">Create Post </div>
            <div class="card-body">
                {!! Form::label('title', 'Blog Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                <br>
                {!! Form::label('desc', 'Blog Description') !!}
                {!! Form::text('desc', null, ['class' => 'form-control']) !!}
            </div>
            <div class="card-footer">
                {!! Form::submit('Add Post', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

            <hr>
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
            {{-- @endforeach --}}
        </div>
    </div>
</div>
@endsection
