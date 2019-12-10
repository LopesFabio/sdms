@extends('Dashboard.menu.index')
@section('content')
    <div class="container-fluid col-md-12">
        <div class="container-fluid col-md-6">
            <div class="floatleft">
                <p></p>
                <h1>Cadastro de Clínicas</h1>
            </div>
        </div>
        <div class="container-fluid col-md-6">
            <div class="floatright">
                <p></p>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Master</li>
                    <li class="breadcrumb-item">Clínicas</li>
                    <li class="breadcrumb-item active" style="color: #0B792F">Cadastro</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- content -->
    @include('dashboard.alerts')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline16-list responsive-mg-b-30">
            <div class="sparkline16-graph">
                <div class="date-picker-inner">
                    <form action="{{route('clinica.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group data-custon-pick" id="nome">
                            <label>Nome Fantasia</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                <input type="text" class="form-control" name="clinica" id="clinica">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_2">
                            <label>CNPJ</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                <input type="text" class="form-control" placeholder="000.000.000/0000-0" name="cnpj" id="cnpj">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Inscrição Estadual</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                                <input type="text" class="form-control" placeholder="000.000.000.000" name="ie" id="ie">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Cidade</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                <input type="text" class="form-control" name="cidade" id="cidade">
                            </div>
                        </div>
                        <div class="form-group data-custon-pick" id="data_3">
                            <label>Estado</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <select class="form-control" name="estado" id="estado">
                                    <option value="" selected>UF</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
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