@extends("layouts.master")

@section("title", "Crear")
    @section("index")
    <div class="well">
        <div class="media">
            <h2>@yield("title") - Pokemon</h2>
            <form method="POST" action="{{route("pokemon.store")}}">
                {!! csrf_field() !!}
                <div class="media-body">
                    <ul class="list-group">
                        <li><label for="identificador">Identificador: </label></li>
                        <li><input name="identificador" type="text" class="text-aqua"></li>

                        <li><label for="nombre">Nombre: </label></li>
                        <li><input name="nombre" type="text" class="text-aqua"></li>

                        <li><label for="tipo">Tipo: </label></li>
                        <li><input name="tipo" type="text" class="text-aqua"></li>

                        <li><label for="descripcion">Descripcion: </label></li>
                        <li><input name="descripcion" type="text" class="text-aqua"></li>


                    </ul>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <a href="{{route("pokemon.index")}}" class="btn btn-primary">Atras</a>
    @endsection