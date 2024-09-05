<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>

<body>
    <section class="container px-4 mx-auto py-4">
        @yield('header')
        <div>
            <x-messages/>
            @yield('content')
        </div>
    </section>
</body>

</html>
