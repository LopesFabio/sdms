@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Clínicas Ativas</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Master</li>
                    <li class="breadcrumb-item">Clínicas</li>
                    <li class="breadcrumb-item active" style="color: #0B792F">Ativas</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
    <div class="sparkline10-list mt-b-30">
        <div class="sparkline10-hd">
            <div class="main-sparkline10-hd">
                <h1>Border Table</h1>
            </div>
        </div>
        <div class="sparkline10-graph">
            <div class="static-table-list">
                <table class="table border-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Clínica</th>
                        <th>CNPJ</th>
                        <th>I.E.</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clinicas as $clinica)
                    <tr>
                        <td>{{$clinica->id}}</td>
                        <td>{{$clinica->nome}}</td>
                        <td>{{$clinica->cnpj}}</td>
                        <td>{{$clinica->ie}}</td>
                        <td>{{$clinica->cidade}}</td>
                        <td>{{$clinica->uf}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection