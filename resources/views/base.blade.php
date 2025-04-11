<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', env('APP_NAME'))</title>
        <link rel="stylesheet" href={{asset('/asset/css/app.css')}}>
        <link rel="stylesheet" href={{asset('/asset/css/normalize.css')}}>
        <link rel="stylesheet" href={{asset('/asset/css/bootstrap.min.css')}}>
    </head>
    <body id="pageContent">
        <header>
            <h2 class="h3">Welcome to My first Laravel App !</h2>
        </header>

        @yield('content')
        
        <footer id="footer">
            <p class="m-0 p-2">&copy; Copyright {{date('Y')}} - RAZAFINDRASOLO Angilio 
                @if(! Route::is('about')) 
                    &middot;<a href="/about-us" class="btn btn-primary">About-Us</a></p>
                @endif
        </footer>
    </body>
</html>