<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vilt Real State</title>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="text-gray-800 bg-white dark:bg-gray-800 dark:text-white">
    @inertia
</body>

</html>
