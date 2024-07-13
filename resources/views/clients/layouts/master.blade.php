<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('clients.layouts.partials.css')
    
</head>

<body>
    <!-- Start Top Nav -->

    @include('clients.layouts.partials.top-nav')

    <!-- Close Top Nav -->


    <!-- Header -->

    @include('clients.layouts.partials.header-nav')

    <!-- Close Header -->

    @yield('content')

    <!-- Start Footer -->
    
    @include('clients.layouts.partials.footer')

    <!-- End Footer -->

    <!-- Start Script -->

    @include('clients.layouts.partials.js')

    <!-- End Script -->
</body>

</html>