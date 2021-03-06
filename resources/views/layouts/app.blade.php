<!DOCTYPE html>
<html>
<head>
    @include('includes.meta')

    <title>@yield('title') | Football Analytics</title>

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>
<body>

    @include('includes.header')
        @yield('content')
    @include('includes.footer')

    @stack('before-script')

    @include('includes.script')
    
    @stack('after-script')
</body>
</html>