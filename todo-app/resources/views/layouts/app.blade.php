<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> 
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-blue-200 to-purple-300 min-h-screen">
    <x-header/>
    <div class="content">
        @yield('content') 
    </div>
</body>
</html>