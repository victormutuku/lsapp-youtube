@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class = "form-group">
        {!! Form::label('title', 'Title') !!}

        {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>
    <div class = "form-group">
        {!! Form::label('body', 'Body') !!}

        {!! Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) !!}
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector('#article-ckeditor'));

    </script>
    <div class="form-group">
        {!! Form::file('cover_image') !!}
    </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@endsection
