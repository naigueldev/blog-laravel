@extends('layouts.app')

@section('content')
<div class="starter-template">
    <a href="/posts" class="mb-5 btn btn-primary">Go Back</a>

    
    <h1>{{$post->title}}</h1>
    
    <small>{{$post->created_at}}</small>
    
    <div class="body-content py-5">
        <p>{{$post->body}}</p>
    </div>
    
</div>

@endsection
