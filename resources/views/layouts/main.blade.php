@include('partials.head')

@include('partials.topbar')
@include('partials.navbar')
@yield('banner')

<main id="main">
    @yield('content')
</main>
@yield('contact')
@include('partials.footer')
