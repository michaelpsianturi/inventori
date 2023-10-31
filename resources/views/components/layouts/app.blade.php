<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventori</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles

</head>
<style>
    [x-cloack] { display: none !important; }
</style>
<body class="pb-4 bg-slate-100">
    {{ $slot }}

    @livewireScripts
    <script src="https://cdn.livewire.dev/livewire.js"></script>

</body>
</html>