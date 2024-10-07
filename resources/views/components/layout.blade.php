<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        {{ $slot }}  <!-- This is where the dynamic content will be injected -->
    </div>
</body>
</html>
