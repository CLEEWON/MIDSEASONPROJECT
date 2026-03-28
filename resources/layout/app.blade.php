<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include('components.header')

    <div class="flex">
        @include('components.sidebar')

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

</body>
</html>