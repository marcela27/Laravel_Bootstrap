<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite([
            'resource/js/app.js',
            'resource/js/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css'
        ])

    </head>
    <body>
    <div class="container py-4 px-3 mx-auto">
        <h1>Hello, Bootstrap and Laravel</h1>
        <button class="btn btn-primary">Primary Button</button>
    </div>   
    </body>
</html>
