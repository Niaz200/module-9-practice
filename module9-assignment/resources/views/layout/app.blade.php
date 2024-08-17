<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Profile')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include('components.navbar')


    <div class="container">
        @yield('content')
    </div>


    @include('components.footer')

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min') }}"></script>
    
</body>
</html>