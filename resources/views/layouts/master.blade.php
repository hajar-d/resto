<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    @include('partials.annance')
    @include('partials.nav')
    <main class="h-auto">
        <div class="m-1">
            @yield('main')
        </div>
    </main>
    <div class="mt-36">

        @include('partials.footer')
    </div>
</body>
</html>