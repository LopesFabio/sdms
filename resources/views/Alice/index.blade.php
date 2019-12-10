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
                    <li class="breadcrumb-item">Alicess</li>
                    <li class="breadcrumb-item">Página Inicial</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.top content -->
    <!-- content -->
        <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
            <div class="hpanel email-compose mailbox-view">
                <div class="panel-heading hbuilt">
                    <div class="p-xs h4">
                        Olá! Sou a Alice, muito prazer!
                    </div>
                </div>
                <div class="border-top border-left border-right bg-light">
                    <div class="p-m custom-address-mailbox">
                        <div>
                            <span class="font-extra-bold">Sou uma assistente virtual e estou aqui para te ajudar a tomar uma decisão</span>
                        </div>
                        <div>
                            <span class="font-extra-bold">Assim como você eu também preciso de orientação</span>
                        </div>
                        <div>
                            <span class="font-extra-bold">Então que tal trabalharmos juntos?</span>
                        </div>
                        <div>
                            <span class="font-extra-bold">Eu fui designada para te ajudar a chegar a um diagnóstico</span>
                        </div>
                        <div>
                            <span class="font-extra-bold">E com isso podemos trabalhar aqui o cadastro de doeças e seus sintomas</span>
                        </div>
                        <div>
                            <p><br></p>
                            <a href="{{route('sintomas.index')}}" class="btn btn-default">Ligar sintoma à Doença</a>
                            <a href="{{route('doencas.index')}}" class="btn btn-default">Cadastrar Doença</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.content -->
@endsection