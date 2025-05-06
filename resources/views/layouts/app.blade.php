<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hidroponik Jember')</title>
    <link rel="icon" type="image/png" sizes="45x45" href="images/icon-40x40.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
    @if (!request()->routeIs('login') && !request()->routeIs('dashboard'))
        <x-navbar :username="$username"></x-navbar>
    @endif
    <div class="bg-[#FAF6E9] flex-grow">
        @yield('slot')
    </div>
    @if (!request()->routeIs('login') && !request()->routeIs('dashboard'))
        @include('components.footer')
    @endif
</body>
</html>
