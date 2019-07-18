<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'Winnie')}}</title>

        
    </head>
    <body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
        </div> 
    </body>
</html>
