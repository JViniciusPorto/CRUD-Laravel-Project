<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])

    <title>Document</title>
</head>
<body>
    <div class="flex flex-col items-center justify-center mt-4">
    @yield('content')
    </div>

</body>
</html>