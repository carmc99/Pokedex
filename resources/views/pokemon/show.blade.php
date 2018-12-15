@extends("layouts.master")

@section("title", "Mostrar")
    @section("index")
        <div class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="{{url('images/pokemons/pokebola.jpg')}}">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$pokemon->nombre}}</h4>
                    <p class="text-right">{{$pokemon->id}}</p>
                    <p>{{$pokemon->descripcion}}</p>
                    <p>Tipo: {{$pokemon->tipo}}</p>
                    <p>Creado: {{$pokemon->created_at}}</p>
                    <p>Ultima modificación: {{$pokemon->updated_at}}</p>
                </div>
            </div>
        </div>
        <a href="{{route("pokemon.index")}}" class="btn btn-primary">Atras</a>
        @endsection