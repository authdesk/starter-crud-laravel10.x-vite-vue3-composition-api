<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Include CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Example</title>

    <!-- App CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <example-component></example-component>
    </div>
    
</body>
</html>