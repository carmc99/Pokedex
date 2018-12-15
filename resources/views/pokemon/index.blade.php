@extends('layouts.master')

@section('title','Inicio')
    @section('index')
<!-- Contenido del encabezado -->
    <section class="content-header">
        <h1>@yield('title')
            <small>Pagina principal</small>
        </h1>

    </section>
    <!-- Finaliza contenido del encabezado -->

    <!-- Contenido principal -->
    <section class="content container-fluid">

        @foreach($pokemon as $pokemon)
        <div class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="align-self-start mr-3" src="{{url('images/pokemons/pokebola.jpg')}}" width="100px" alt="Generic placeholder image" >
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><b>{{$pokemon->nombre}}</b></h4>
                    <span class="badge badge-primary">{{$pokemon->id}}</span>
                    <p align="justify">{{$pokemon->descripcion}}</p>
                    <ul class="list-inline list-unstyled">
                        <li><span class="badge badge-secondary">{{$pokemon->tipo}}</span></li>
                        <li><a href="{{route("pokemon.show",$pokemon->id)}}" class="btn btn-info">Ver detalle</a></li>
                        <li><a href="{{route("pokemon.edit",$pokemon->id)}}" class="btn btn-warning" >Modificar</a></li>
                        <li><form method="POST" action="{{route("pokemon.destroy",$pokemon->id)}}">
                            {!! method_field("DELETE") !!}
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

    </section>
    <!-- Finaliza contenido principal-->
@endsection