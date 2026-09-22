<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LMS SMKN 1 Gemlong</title>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                background:
                    linear-gradient(135deg, rgba(19, 78, 74, .92), rgba(15, 118, 110, .86)),
                    url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80');
                background-size: cover;
                background-position: center;
            }

            .auth-card {
                border: 1px solid rgba(255, 255, 255, .35);
                background: rgba(255, 255, 255, .92);
                box-shadow: 0 24px 70px rgba(15, 23, 42, .28);
                backdrop-filter: blur(14px);
            }

            .brand-mark {
                width: 58px;
                height: 58px;
                border-radius: 18px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #0f766e, #f59e0b);
                color: #fff;
                font-weight: 800;
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center px-4 py-8">
            <a href="/" class="text-center mb-6 no-underline">
                <span class="brand-mark mx-auto mb-3">L1</span>
                <span class="block text-white text-2xl font-extrabold tracking-tight">LMS SMKN 1 Gemlong</span>
                <span class="block text-white/80 text-sm font-semibold mt-1">Learning Management System</span>
            </a>

            <div class="auth-card w-full sm:max-w-md px-6 py-6 overflow-hidden rounded-2xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
