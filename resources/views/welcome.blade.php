<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="flex h-screen overflow-hidden bg-white" x-data="{ open: false }">
        <!-- Your content here -->
        <button @click="open = !open" class="p-4 bg-blue-500 text-white">Toggle</button>
        <div x-show="open" class="p-4 bg-green-500 text-white">Hello, Alpine.js!</div>
    </div>
</body>

</html>