@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Cadastro de Paciente</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Paciente</li>
                    <li class="breadcrumb-item">Cadastro</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="all-form-element-inner">
            <div class="form-group">
                <form action="{{route('paciente.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="sparkline16-graph">
                        <div class="date-picker-inner">
                            <div class="form-group data-custon-pick">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Nome Completo" name="nome" id="nome">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                    <input type="text" class="form-control" placeholder="RG" name="rg" id="rg">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                    <input type="text" class="form-control" placeholder="cpf" name="cpf" id="cpf">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                    <input type="text" class="form-control" placeholder="Número do SUS" name="sus" id="sus">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick">
                                <label>Data de Nascimento</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control" name="nascimento" id="nascimento">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick">
                                <div class="input-group">
                                    <button class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection