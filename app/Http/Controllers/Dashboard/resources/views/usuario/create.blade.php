@extends('Dashboard.menu.index')
@section('content')
    <!-- top content -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 floatright">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Clínicas</a> <span class="bread-slash">/</span></li>
                                    <li><span class="bread-blod">Cadastrar</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline16-list responsive-mg-b-30">
            <div class="sparkline16-graph">
                <div class="date-picker-inner">
                    <form action="#" method="POST">
                        {{csrf_field()}}
                        <div class="form-group data-custon-pick" id="nome">
                            <label>Nome</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_2">
                            <label>Email</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Senha</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Confirmar Senha</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="text" class="form-control" name="passwordconfirm" id="passwordconfirm">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Nível de Acesso</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                <select class="form-control" name="acl" id="acl">
                                    <option value="" selected disabled>Selecione</option>
                                    <option value="recepcao">Recepção</option>
                                    <option value="rh">Recursos Humanos</option>
                                    <option value="dentista">Dentista</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Clínica</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                <select class="form-control" name="clinicaid" id="clinicaid">
                                    <option value="" selected disabled>Selecione</option>
                                    @foreach($clinicas as $clinica)
                                    <option value="{{$clinica->id}}">{{$clinica->id}} - {{$clinica->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <div class="input-group date">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection