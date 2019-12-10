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
                    <li class="breadcrumb-item">Alices</li>
                    <li class="breadcrumb-item">Página Inicial</li>
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
                    <h1>Cadastrar Doenças</h1>
                </div>
            </div>
            <form action="{{route('doencas.store')}}" method="POST">
                {{csrf_field()}}
                <div class="sparkline16-graph">
                    <div class="date-picker-inner">
                        <div class="form-group">
                            <label>Nome da Doença</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                                <input type="text" class="form-control" name="doenca" id="doenca">
                            </div>
                        </div>
                        <div class="date-picker-inner">
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Cadastrar</button>
                            </div>
                        </div>
                        <div class="date-picker-inner">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" selected>Doeças já Cadastradas</option>
                                    @foreach($doencas as $doenca)
                                    <option value="{{$doenca->id}}">{{$doenca->id}} - {{$doenca->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.content -->
@endsection