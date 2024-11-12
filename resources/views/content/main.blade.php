@include('layouts.header')

<body>
    @include('layouts.nav')
    <div class="container">
        @yield('data')
    </div>
    @include('layouts.footer')
</body>

</html>
