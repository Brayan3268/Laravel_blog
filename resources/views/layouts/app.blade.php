<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default value')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- fontawesome --}}
    {{-- tipografia --}}

    @stack('css')

</head>
<body>

    <header></header>

    <!-- This part will be replaced for a variable content -->
    @yield('content')

    <footer></footer>

    @stack('js')
</body>
</html>