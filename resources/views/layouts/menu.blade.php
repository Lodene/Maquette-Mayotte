<div class="side-content-wrap" style="margin-top:80px;">
    <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true" style="height:100vh;">
        <ul class="navigation-left" style="height:100vh; background-color:#1d3d74;">
            @if(1 == 1)
                {{-- @if(Auth::user()->hasRole('Administrateur')) --}}
                    <li class="nav-item @if(Session::get('lien') == '/admin/users') active @endif"  data-item="gestionnaire" >
                        <a class="nav-item-hold">
                            <i class="fas fa-2x fa-users" aria-hidden="true"></i>
                            <span class="nav-text">Espace Gestionnaire</span>
                        </a>
                    </li>
                    <li class="nav-item @if(Session::get('lien') == '/admin/users') active @endif"  data-item="RDD" >
                        <a class="nav-item-hold">
                            <i class="fas fa-2x fa-users" aria-hidden="true"></i>
                            <span class="nav-text">Espace RDD</span>
                        </a>
                    </li>
                    <li class="nav-item @if(Session::get('lien') == '/admin/users') active @endif"  data-item="SM" >
                        <a class="nav-item-hold">
                            <i class="fas fa-2x fa-users" aria-hidden="true"></i>
                            <span class="nav-text">Espace SM</span>
                        </a>
                    </li>
                    <li class="nav-item @if(Session::get('lien') == '/admin/users') active @endif"  data-item="Admin" >
                        <a class="nav-item-hold">
                            <i class="fas fa-2x fa-users" aria-hidden="true"></i>
                            <span class="nav-text">Menu Admin</span>
                        </a>
                    </li>
                {{-- @endif --}}
            @endif
            <li class="nav-item">
                @if(  Session::get('rollback') != null )
                    <a href="{{ route('users.rollbacklogin' ) }}" class="nav-item-hold" title="Retour à votre compte utilisateur">
                        <i class="fa fa-angle-left"></i>
                    </a>
                @else
                    @if(!isset($GLOBALS['auth']))
                        {{ $GLOBALS['auth'] = 1 }} 
                    @endif
                    @if ($GLOBALS['auth'] == 1)
                        <a class="nav-item-hold button-logout">
                            <i class="fas fa-2x fa-sign-out-alt"></i>
                            <span class="nav-text">Déconnexion</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <div class="triangle"></div>
                    @else 
                        <a class="nav-item-hold button-logout">
                            <i class="fas fa-2x fa-sign-in-alt"></i>
                            <span class="nav-text">Connexion</span>
                        </a>
                        <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif
                    
                @endif
            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
        {{-- @if(Auth::user()->hasRole('Administrateur')) --}}
            <ul class="childNav" data-parent="gestionnaire">
                <li class="nav-item">
                
                    <a style="cursor:text; background-color:#eeefef;">
                        <span class="item-name mx-auto text-center my-3">
                            -- Général --
                        </span>
                    </a>
                    <a href="{{ route('gestionnaire.listeDemandeData') }}"><i class="fa fa-list" style="color:black;"></i><span class="item-name p-3">Liste de vos Demandes</span></a>
                    <a href="{{ route('gestionnaire.FormulaireDeDemande') }}"><i class="fa fa-list" style="color:black;"></i><span class="item-name p-3">Faire une nouvelle demande</span></a>
                    
                </li>
            </ul>
            <ul class="childNav" data-parent="RDD">
                <li class="nav-item">
                
                    <a style="cursor:text; background-color:#eeefef;">
                        <span class="item-name mx-auto text-center my-3">
                            -- Général --
                        </span>
                    </a>
                    <a href="{{ route('RDD.listeDemande') }}"><i class="fa fa-list" style="color:black;"></i><span class="item-name p-3">Liste des Demandes</span></a>
                    
                </li>
            </ul>
            <ul class="childNav" data-parent="SM">
                <li class="nav-item">
                
                    <a style="cursor:text; background-color:#eeefef;">
                        <span class="item-name mx-auto text-center my-3">
                            -- Général --
                        </span>
                    </a>
                    <a href="{{ route('SM.listeDemande') }}"><i class="fa fa-list" style="color:black;"></i><span class="item-name p-3">Liste des Demandes</span></a>
                    
                </li>
            </ul>
            <ul class="childNav" data-parent="Admin">
                <li class="nav-item">
                
                    <a style="cursor:text; background-color:#eeefef;">
                        <span class="item-name mx-auto text-center my-3">
                            -- Listes --
                        </span>
                    </a>
                    <a href="/adminPage/Etablissement"><i class="fa fa-list" style="color:black;"></i><span class="item-name p-3">Etablissement</span></a>
                    <a href="/adminPage/Zone"><i class="fa fa-list" style="color:black;"></i><span class="item-name p-3">Zone</span></a>
                    
                </li>
            </ul>
        {{-- @endif --}}
    </div>
    <div class="sidebar-overlay"></div>
</div>
