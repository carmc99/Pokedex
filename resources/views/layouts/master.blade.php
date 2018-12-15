<!DOCTYPE html>
<html>


@include('layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Encabezado principal -->
    <header class="main-header">
      @include('layouts.header')
    </header>

    <!-- Barra de navegacion izquierda -->
    <aside class="main-sidebar">
      @include('layouts.sidebarLeft')
    </aside>

    <!-- Contenido principal -->
    <div class="content-wrapper">
      <section class="content container-fluid">
        @yield('index')
      </section>
      <!-- Contenido principal footer -->
    </div>

    <!-- Barra derecha de control -->
    <aside class="control-sidebar control-sidebar-dark">
      @include('layouts.sidebarRight')
    </aside>
    <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    @include('layouts.footer')
  </div>
</body>
</html>
