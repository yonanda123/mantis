<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head-page-meta')
    @include('layouts.head-css')
    @stack('styles')
</head>

<body>

    @include('layouts.loader')
    @include('layouts.sidebar')
    @include('layouts.topbar')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('layouts.footer-block')
    @include('layouts.footer-js')
    @stack('scripts')

</body>

</html>
