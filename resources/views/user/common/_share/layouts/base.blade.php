<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('user.common._share.components.assets')
</head>
<body>
    <!-- -------------------- header -------------------- -->
    @include('user.common._share.layouts.header')

    <!-- -------------------- main -------------------- -->
    <main>
        @yield('main')
    </main>

    <!-- -------------------- footer -------------------- -->
    @include('user.common._share.layouts.footer')
</body>
</html>
