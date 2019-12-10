<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="#"><img class="main-logo" src="{{asset('Admin/img/logo.png')}}" alt="" /></a>
            <strong><a href="#"><img src="{{asset('Admin/img/logo/.png')}}" alt="" /></a></strong>
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
                            <li><a href="#" style="color: #35c439"><span class="mini-sub-pro">Cadastrar</span></a></li>
                            <li><a href="#" style="color: #35c439"><span class="mini-sub-pro">Pacientes Ativos</span></a></li>
                        </ul>
                    </li>
                    <!-- /.pacientes -->

                    <!-- Master -->
                   <li>
                       <a class="has-arrow" href="#" style="color: #35c439">
                           <span class="fa fa-plus" style="color: #35c439"></span>
                           <span class="mini-click-non">Cadastrar</span>
                       </a>
                       <ul  style="color: #35c439">
                           <ul class="submenu-angle" aria-expanded="true">
                               <li>
                                   <a class="has-arrow" href="#" style="color: #35c439">
                                       <span class="mini-click-non">Clínicas</span>
                                   </a>
                                   <ul class="submenu-angle">
                                       <li>
                                           <a href="{{route('clinica.create')}}" style="color: #35c439">
                                               <span class="mini-click-non">Cadastrar</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="{{route('clinica.index')}}" style="color: #35c439">
                                               <span class="mini-click-non">Clínicas Ativas</span>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li>
                                   <a class="has-arrow" href="#" style="color: #35c439">
                                       <span class="mini-click-non">Usuários</span>
                                   </a>
                                   <ul class="submenu-angle">
                                       <li>
                                           <a href="{{route('usuario.create')}}" style="color: #35c439">
                                               <span class="mini-click-non">Cadastrar</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="{{route('usuario.index')}}" style="color: #35c439">
                                               <span class="mini-click-non">Usuários Ativos</span>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                           </ul>
                       </ul>
                   </li>
                    <!-- /.master -->
                </ul>
            </nav>
        </div>
    </nav>
</div>