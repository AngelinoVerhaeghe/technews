<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
</head>

<body class="antialiased scroll-smooth font-georama relative bg-slate-50">
    <img src="{{ url('images/background-image.jpg')}}" class="absolute w-full object-cover" alt="TechNews" />
    @inertia
</body>

</html>
