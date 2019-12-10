<!doctype html>
<html class="no-js" lang="pt-br">

@include('dashboard.menu.head')

<body>
@include('Dashboard.menu.sidebar')

<!-- Content Top -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="#"><img class="main-logo" src="{{asset('Admin/img/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">

        @include('dashboard.menu.navtop')

        @include('dashboard.menu.mobilemenu')

    </div>
    <!-- /.Content top -->

    <!-- content -->

    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>

    <!-- /.Content -->

@include('dashboard.menu.script')
</body>

</html>