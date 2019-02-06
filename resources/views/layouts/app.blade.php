@include('partials._header')

    <div class="container">
        @include('partials._navbar')
        @yield('content')
    </div>

@include('partials._footer')
