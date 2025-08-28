<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $app->app_title ?? 'Gatra Personal Space' }}" />
    <meta property="og:description" content="{{ $app->app_description ?? 'You have entered Gatra\'s private zone' }}" />
    <meta name="description" content="{{ $app->app_description ?? 'You have entered Gatra\'s private zone' }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <title>{{ $app->app_title ?? 'Gatra Personal Space' }}</title>
    <link rel="canonical" href="{{ config('app.url') }}" />
    <link rel="shortcut icon" href="{{ $app_favicon ?? asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    @vite(['resources/css/app.css'])
</head>
<body class="font-['Outfit'] bg-black text-white selection:bg-neutral-500 selection:text-neutral-300 overflow-y-auto">
    @yield('content')
</body>
<script type="text/javascript" src="https://smtpjs.com/v3/smtp.js"></script>
<script src="{{ asset('script.js') }}"></script>
</html>