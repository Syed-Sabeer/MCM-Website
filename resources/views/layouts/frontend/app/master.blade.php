<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.frontend.app.meta')
    @include('layouts.frontend.app.css')
    @yield('css')

</head>

<body>


        @include('layouts.frontend.app.header')



  @yield('content')


        @include('layouts.frontend.app.footer')
                @include('layouts.frontend.app.postfooter')
    @include('layouts.frontend.app.script')
    @yield('script')



</body>

</html>
