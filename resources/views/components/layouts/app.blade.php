<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title') @yield('title') - {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --color-primary: #0879ed;
            --color-secondary: #fe975c;
            --color-accent-1: #fc975c;
            --color-accent-2: #75b501;
            --color-accent-3: #caf291;
            --color-text-dark: #000000;
            --color-text-light: #ffffff;
            --font-family-main: 'Poppins', sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: var(--font-family-main);
            background-color: var(--color-text-light);
            color: var(--color-text-dark);
            overflow-x: hidden;
        }

        .section-container {
            width: 100%;
            max-width: 1920px;
            margin-left: auto;
            margin-right: auto;
            padding: 80px 40px;
            position: relative;
        }

        @media (max-width: 768px) {
            .section-container {
                padding: 40px 20px;
            }
        }

        @stack('styles')
    </style>
    
    @stack('head')
</head>
<body class="antialiased">
    @yield('content')
    
    @stack('scripts')
</body>
</html>