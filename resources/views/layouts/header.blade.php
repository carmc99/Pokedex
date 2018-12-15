<!-- Logo -->
    <a href="{{route('index')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>oke</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Poke</b>dex</span>
    </a>
    <!-- Encabezado Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!--Palanca de navegacion -->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only"></span>
        </a>
        <!-- Navbar Menu derecho -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notificacion Menu -->
                <!-- end Notificacion -->

                <!-- Menu usuario-->
               @include('users.user')
                <!-- Body -->
                <!-- Barra de control -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
