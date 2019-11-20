<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>BLOG APP</title>
    
    <link rel="stylesheet" href="{{asset('scss/app.scss')}}">
    
</head>
<body>
    @include('inc.navbar')
    <main role="main" class="container">
        @include('inc.messages')
        @yield('content')
    </main>
    
</body>
</html>
