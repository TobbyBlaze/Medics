@include('includes.homePageHead')
<body>
    @include('includes.navMenu')
    @include('includes.mobi-navMenu')
    @yield('content')
    @include('includes.footer')
    @include('includes.homePageTail')
</body>
