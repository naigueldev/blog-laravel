@extends('layouts.app')

@section('content')
<div class="starter-template">
    <h1>{{$title}}</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>

@if(count($services) > 0)
<ul>
    @foreach ($services as $service)
    <li>{{$service}}</li>
    @endforeach
</ul>
@endif

@endsection
