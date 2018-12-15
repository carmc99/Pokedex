<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Menu barra lateral -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu principal</li>
            <li class="active"><a href="{{route('index')}}"><i class="glyphicon glyphicon-th"></i><span>Inicio</span></a></li>
            <li class="treeview">
                <a href=""><i class="glyphicon glyphicon-ok"></i><span>Gestion pokemón</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route("pokemon.index")}}">Inicio</a></li>
                    <li><a href="{{route("pokemon.create")}}">Añadir Pokemón</a></li>
                </ul>
            </li>
        </ul>
        <!-- Finaliza Menu barra lateral -->
    </section>
    <!-- Finaliza barra de navegacion izquierda -->
