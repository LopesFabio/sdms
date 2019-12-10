@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Assitente Virtual</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Alice</li>
                    <li class="breadcrumb-item">Cadastro</li>
                    <li class="breadcrumb-item active">Cadastro</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline16-list responsive-mg-b-30">
            <div class="sparkline16-hd">
                <div class="main-sparkline16-hd">
                    <h1>Cadastrar Sintoma</h1>
                </div>
            </div>
            <form action="{{route('sintomas.store')}}" method="POST">
                {{csrf_field()}}
                <div class="sparkline16-graph">
                    <div class="date-picker-inner">
                        <div class="form-group">
                            <select class="form-control" name="doenca" id="doenca">
                                <option value="" selected>Selecione a Doença</option>
                                @foreach($doencas as $doenca)
                                <option value="{{$doenca->id}}">{{$doenca->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sintoma</label>
                            <input type="text" class="form-control" name="sintoma" id="sintoma">
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-default">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.content -->
@endsection