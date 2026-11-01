<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>

<body>

    <x-navbar />

    @if (session('success'))
        <div class="alert alert-success text-center mb-0 rounded-0 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer />
    @livewireScripts
</body>

</html>