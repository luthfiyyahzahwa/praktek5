<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
        <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
        @include('layout.partial.link')
    </head>

    <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    @include('layout.partial.header')
    
    @yield('content')


    @include('layout.partial.footer')

    </body>
    @include('layout.partial.script')
</html>
