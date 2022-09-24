<!DOCTYPE html>
<html lang="en">
@include('layouts.main.head')

<body>
    @include('layouts.main.navbar')

    @yield('content')

    @include('layouts.main.footer')
</body>

</html>