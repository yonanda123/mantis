<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand text-primary">
                <!-- ======== Change your logo from here ======== -->
                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>

        <div class="navbar-content">
            <ul class="pc-navbar">
                @include('layouts.menu-list')
            </ul>

            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ asset('assets/images/img-navbar-card.png') }}" alt="images" class="img-fluid mb-2">
                    <h5>Upgrade To Pro</h5>
                    <p>To get more features and components</p>
                    <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank"
                        class="btn btn-success">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
