<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ URL::asset('/css/auth/login.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/components/boostrap_components/bootstrap/dist/css/bootstrap.min.css') }}"
<body>
@if(session()->has('iniciaSesion'))
    <div class="alert alert-warning" align="center">
        <a class="alert-link">{{session('iniciaSesion')}}</a>
    </div>
    @endif
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Pokebola-pokeball-png-0.png" id="icon" alt="User Icon" />
            <h1>PokeDex</h1>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{route("login")}}">
            {!! csrf_field() !!}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} ">
                <input value="{{old('email')}}" type="text" id="login" class="fadeIn second" name="email" placeholder="E-Mail">
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}} ">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
            </div>
            <input type="submit" class="fadeIn fourth" value="Iniciar sesión">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Reestablecer contraseña</a>
        </div>
    </div>
</div>
<script src="{{ URL::asset('assets/components/jquery_components/jquery/dist/jquery.min.js') }}"></script>
</body>
</html>
