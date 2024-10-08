<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.preloader')

    @yield('content')

    @include('includes.footer')
    @include('includes.script')
</body>

</html>
