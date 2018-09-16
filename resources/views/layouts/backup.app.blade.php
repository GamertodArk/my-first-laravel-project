<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'LSAPP')}}</title>      
    </head>
    <body>
        @include('inc.navbar')
        <div style="padding-top: 1em;" class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            
            setTimeout(function(){
                CKEDITOR.replace( 'article-ckeditor' );
            },5000);
            
        </script>
    </body>
</html>
