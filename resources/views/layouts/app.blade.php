<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hidroponik Jember')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Tuffy:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" sizes="45x45" href="images/icon-40x40.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen font-['Noto_Sans']">
    @if (!request()->routeIs('login') && !request()->routeIs('dashboard'))
        <x-navbar :username="$username" class="font-['Comic Relief']"></x-navbar>
    @endif
    <div class="bg-[#FAF6E9] flex-grow font-['Noto_Sans']">
        @yield('slot')
    </div>
    @if (!request()->routeIs('login') && !request()->routeIs('dashboard'))
        @include('components.footer')
    @endif
</body>

</html>
