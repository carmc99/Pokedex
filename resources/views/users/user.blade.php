
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ URL::asset('/images/avatar.png') }}" class="user-image" alt="User Image">
        <span class="hidden-xs">{{auth()->user()->name}}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ URL::asset('/images/avatar.png') }}" class="img-circle" alt="User Image">

            <p> {{auth()->user()->name}} - {{auth()->user()->rol}}
                <small>Miembro desde: {{auth()->user()->created_at}}</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="row">
                <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                </div>
            </div>
            <!-- /.row -->
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <form method="POST" action="{{route('logout')}}">
                {!! csrf_field() !!}
                <div class="pull-right">
                    <button class="btn btn-danger btn-sm btn-block">Cerrar sesión</button>
                </div>
            </form>
        </li>
    </ul>
</li>
