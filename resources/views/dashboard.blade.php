<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head-page-meta', ['title' => 'Home'])
    @include('layouts.head-css')
</head>

<body>
    @include('layouts.layout-vertical')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">

            @include('layouts.breadcrumb')

            <div class="row">
                <!-- Card Stats -->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
                            <h4 class="mb-3">
                                4,42,236
                                <span class="badge bg-light-primary border border-primary">
                                    <i class="ti ti-trending-up"></i> 59.3%
                                </span>
                            </h4>
                            <p class="mb-0 text-muted text-sm">
                                You made an extra <span class="text-primary">35,000</span> this year
                            </p>
                        </div>
                    </div>
                </div>

                {{-- card lain tetap sama --}}
                {{-- (isinya tidak perlu diubah, hanya asset & include saja) --}}
            </div>

        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('layouts.footer-block')

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->

    @include('layouts.footer-js')
</body>

</html>
