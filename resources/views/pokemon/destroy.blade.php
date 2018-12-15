@extends("layouts.master")

@section("title", "Eliminar")
@section("index")
            <form method="POST" action="{{route("pokemon.destroy",$pokemon->id)}}">
                {!! method_field("DELETE") !!}
                {!! csrf_field() !!}
            </form>
@endsection