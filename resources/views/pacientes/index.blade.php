@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Pacientes</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Pacientes</li>
                    <li class="breadcrumb-item">Todos</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list mg-b-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1>Hover Table</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="static-table-list">
                    <table class="table hover-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>CPF</th>
                            <th>Nº. SUS</th>
                            <th>Data de Nascimento</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->id}}</td>
                                <td>{{$paciente->nome}}</td>
                                <td>{{$paciente->rg}}</td>
                                <td>{{$paciente->cpf}}</td>
                                <td>{{$paciente->sus}}</td>
                                <td>{{date("d/m/Y", strtotime($paciente->nascimento))}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection