<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Google Font Pacifico --}}
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        /* Shimmer effect for button */
        .shimmer {
            position: relative;
            overflow: hidden;
        }
        .shimmer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-20deg);
            animation: shimmer 2s infinite;
        }
        @keyframes shimmer {
            0% { left: -75%; }
            100% { left: 125%; }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-pink-200 via-pink-100 to-pink-200 min-h-screen">

    <x-navbar />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
