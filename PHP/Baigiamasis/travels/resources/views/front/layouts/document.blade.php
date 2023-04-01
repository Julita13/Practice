<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.partials.head')
</head>

<body>
    @include('front.partials.navigation')
    <main>
        @yield('content')
    </main>
</body>


@include('front.partials.footer')

</html>