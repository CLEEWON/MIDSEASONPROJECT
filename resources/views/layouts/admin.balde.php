<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SweetBake Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fff9f8]">

<div class="flex min-h-screen">
    @include('components.sidebar')
    
    <div class="flex-1 flex flex-col">
        @include('components.header')
        
        <main class="flex-1 p-6 md:p-8 overflow-auto">
            @yield('content')
        </main>
        
        @include('components.footer')
    </div>
</div>

</body>
</html>