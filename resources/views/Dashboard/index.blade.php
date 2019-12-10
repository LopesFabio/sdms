@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Página Inicial</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Página Inicial</li>
                    <li class="breadcrumb-item">Início</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->

    <!-- widget Alice -->
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="analytics-sparkle-line reso-mg-b-30">
            <div class="analytics-content">
                <a href="{{route('alice.index')}}" style="color: black"><img src="{{asset('Admin/img/logoalice.png')}}"></a>
            </div>
        </div>
    </div>
    <!-- /.widget Alice -->
    <!-- /.content -->
@endsection