@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Triagem</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Atendimento</li>
                    <li class="breadcrumb-item">Triagem</li>
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
                    <form>
                        <div class="form-group data-custon-pick">
                            <label>Paciente</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select class="form-control">
                                    <option value="" selected>Selecione</option>
                                    @foreach($pacientes as $paciente)
                                    <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group data-custon-pick">
                            <label>Tipo Sanguíneo</label>
                            <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-heartbeat"></i></span>
                                <select class="form-control">
                                    <option value="" selected>Selecione</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group data-custon-pick">
                            <div class="form-group data-custon-pick" id="data_1">
                                <label>Pressão</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick" id="data_1">
                                <label>Pressão</label>
                                <div class="input-group date">
                                    <button type="submit" class="btn btn-default">Finalizar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection