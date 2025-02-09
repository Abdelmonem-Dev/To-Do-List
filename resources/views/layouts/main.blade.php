@props(['title' => config('app.name')])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="Description" content="A dynamic and aesthetic To-Do List WebApp.">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Quick Sand -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- font awesome (https://fontawesome.com) for basic icons; source: https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    @vite(['resources/css/main.css', 'resources/js/main.js'])


</head>

<body>

    <nav class="navbar">

        <div class="nav-container">
            <div>ToDoList</div>

            <div class="nav-links">
                <a href="#"><i class="fas fa-home"></i> Home</a>
                <a href="#"><i class="fas fa-info-circle"></i> About</a>
                <a href="#"><i class="fas fa-tasks"></i> Tasks</a>
                <a href="#"><i class="fas fa-envelope"></i> Contact</a>

            </div>
        </div>
        <button id="theme-toggle-btn" class="theme-toggle-btn">Themes</button>

        <!-- Theme Selector Dropdown -->
        <div id="theme-toggle" class="theme-toggle" style="display: none;">
            <div class="standard-theme theme-selector"></div>
            <div class="light-theme theme-selector"></div>
            <div class="darker-theme theme-selector"></div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
