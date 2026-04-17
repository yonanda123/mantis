<!-- layouts.layout-vertical.blade.php  -->
@include('layouts.loader')
@include('layouts.sidebar')
@include('layouts.topbar')

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- Breadcrumb & Content injected here via @yield('content') -->
        @yield('content')
    </div>
</div>
<!-- [ Main Content ] end -->
