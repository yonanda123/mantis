<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">

                {{-- PAGE TITLE --}}
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        {{ $breadcrumb_item_active }}
                    </h5>
                </div>

                {{-- BREADCRUMB --}}
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>

                    @isset($breadcrumb_item)
                        <li class="breadcrumb-item">
                            {{ $breadcrumb_item }}
                        </li>
                    @endisset

                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $breadcrumb_item_active }}
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
