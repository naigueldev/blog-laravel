@extends('layouts.app')

@section('content')
<div class="starter-template">
    <a href="/posts" class="mb-5 btn btn-primary">Go Back</a>

    
    <h1>{{$post->title}}</h1>
    
    <div class="body-content py-5">
        <p>{{$post->body}}</p>
    </div>

    <small>Written on {{$post->created_at}}</small>
    <hr>
    <div class="d-flex justify-content-center">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default mx-4">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'form-delete-class' ])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger mx-3'])}}
        {!!Form::close()!!}

    </div>
</div>

@endsection
