<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="">
@include('partials.navbar')

<!-- Main Section-->
<section class="mt-0">
    @yield('content')
</section>
<!-- / Main Section-->

@include('partials.footer')
@include('partials.scripts')
</body>
</html>
