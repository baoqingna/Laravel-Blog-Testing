@extends('layouts.master')

@section('form')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            {!! Form::open() !!}
            {{-- <form name="sentMessage" id="contactForm" novalidate> --}}
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

            {{-- </form> --}}
            {!! Form::close() !!}


             <br>


            @foreach ($blogs as $blog)
            <div class="post-preview">
                <a href="/">
                    <h2 class="post-title">{{$blog->blogTitle}}</h2>
                    <h3 class="post-subtitle">{{$blog->blogDesc}}</h3>
                    <p>
                     {{'Created (' .$blog->created_at. ')'}}
                     {{'/ Updated (' .$blog->updated_at. ')'}}</p>
                    <p class="post-meta">
                      {{-- <td><a href="{{ url('task/'.$task->id.'/edit') }}">Edit</a></td> --}}
                        <a href="{{url('blog/' .$blog->id. '/edit')}}">Edit</a>
                        <a href="#">Delete</a>
                    </p>
                </a>
            </div>
            <hr><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
