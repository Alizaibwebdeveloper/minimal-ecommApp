<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Minimal-E-commerce</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    @livewire('header')
    @livewire('hero-section')
    </body>
</html>
