<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Extends showcase</title>
</head>

<body class="bg-gray-300 min-h-screen flex flex-col">

    {{-- header --}}
    <header class="bg-blue-500 text-white h-16 flex items-center justify-center">
        @include('layouts.header')
    </header>

    {{-- Changing content --}}
    <div class="container mx-auto flex flex-1">
        {{-- sidebar --}}
        <div class="w-1/4 h-full flex items-center justify-center">
            @include('layouts.sidebar')
        </div>
        
        {{-- content --}}
        <div class="w-3/4 flex justify-center items-center h-full">
            @yield('content')
        </div>
    </div>

    {{-- footer --}}
    <footer class="bg-blue-500 text-white h-16 flex items-center justify-center">
        @include('layouts.footer')
    </footer>
</body>
</html>
