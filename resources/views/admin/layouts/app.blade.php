<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>@yield('title') - {{config('app.name')}}</title>

</head>

<body>
    <head>
        @yield('header')
    </head>

    <div id="content">
        @yield('content')
    </div>

    <footer>
        $default footer
    </footer>
</body>

</html>
