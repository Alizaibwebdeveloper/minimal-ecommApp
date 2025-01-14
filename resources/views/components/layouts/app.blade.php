<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        @vite('resources/js/app.js')

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        @livewire('header')
        {{ $slot }}
        @livewire('footer')
    </body>
</html>
