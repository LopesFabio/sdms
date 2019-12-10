@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Diagnóstico</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Atendimento</li>
                    <li class="breadcrumb-item">Diagnóstico</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline16-list responsive-mg-b-30">
            <div class="sparkline16-graph">
                <div class="date-picker-inner">
                    <form action="{{route('diagnostico.store')}}" method="POST">
                        {{csrf_field()}}
                    <div class="form-group data-custon-pick" id="data_1">
                        <label>Selecione o Sintoma</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                            <select class="form-control" name="sintoma[]" id="sintoma[]" multiple="multiple">
                                @foreach($sintomas as $sintoma)
                                    <option value="{{$sintoma->id}}">{{$sintoma->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <p></p>
                    <button class="btn btn-default" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection