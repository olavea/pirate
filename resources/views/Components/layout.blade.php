<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

</head>
<body class="p-4 bg-green-300 font-black">
    <nav>
        <a class=" hover:underline" href="/">Home</a>
        <x-nav></x-nav>
        <x-nav>about</x-nav>
        <x-nav>pirate</x-nav>
    </nav>
    {{$slot}}
</body>
</html>