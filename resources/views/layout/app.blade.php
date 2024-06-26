<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.headerLink')
</head>
<body data-theme="">
    @include('layout.header')

       @yield('content')

    @include('layout.footer')
    @include('layout.footerLink')
</body>
</html>