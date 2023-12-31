<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Spanty Website' }}</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>
<body>
    
    @include('partials.navbar')

    <main>
        @yield('body')
    </main>
    
    @include('partials.footer')
    
</body>
</html>