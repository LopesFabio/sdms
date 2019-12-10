<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="#"><img class="main-logo" src="{{asset('Admin/img/logo.png')}}" alt="" /></a>
            <strong><a href="#"><img src="{{asset('Admin/img/minilogo.png')}}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a href="{{route('home.index')}}" aria-expanded="false" style="color: #35c439">
                            <span class="fa fa-home" aria-hidden="true" style="color: #35c439"></span>
                            <span class="mini-click-non">Página Inicial</span>
                            </a>
                    </li>
                    <!-- pacientes --> <!-- Recepção -->
                    <li>
                        <a class="has-arrow" href="#" style="color: #35c439">
                            <span class="fa fa-users" style="color: #35c439"></span>
                            <span class="mini-click-non">Pacientes</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a href="{{route('paciente.create')}}" style="color: #35c439"><span class="mini-sub-pro">Cadastrar</span></a></li>
                            <li><a href="{{route('paciente.index')}}" style="color: #35c439"><span class="mini-sub-pro">Pacientes Ativos</span></a></li>
                        </ul>
                    </li>
                    <!-- /.pacientes -->
                    <!-- Triagem -->
                    <li>
                        <a href="{{route('triagem.index')}}" style="color: #35c439">
                            <span class="fa fa-user-md" style="color: #35c439"></span>
                            <span class="mini-click-non">Triagem</span>
                        </a>
                    </li>
                    <!-- /Triagem -->

                    <!-- Diagnosticos -->
                    <li>
                        <a href="{{route('diagnostico.index')}}" style="color: #35c439">
                            <span class="fa fa-user-md" style="color: #35c439"></span>
                            <span class="mini-click-non">Diagnóstico</span>
                        </a>
                    </li>
                    <!-- /.Diagnosticos -->
                </ul>
            </nav>
        </div>
    </nav>
</div>