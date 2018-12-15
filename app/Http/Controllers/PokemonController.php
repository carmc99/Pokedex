<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //JQuery builder
    //$pokemon = DB::table('pokemon')->get();
        //Eloquent
        $pokemon = Pokemon::all();
     return view("pokemon.index", compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pokemon.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //JQuery builder
        /*
        DB::table("pokemon")->insert([
            "id" => $request->input('identificador'),
            "nombre" => $request->input('nombre'),
            "tipo" => $request->input('tipo'),
            "descripcion" => $request->input('descripcion'),
            "created_at" => Carbon::now(),  //Ingresa la fecha actual
            "updated_at" => Carbon::now(),
        ]);
        */
        //Eloquent forma 1
        /*
        $pokemon = new Pokemon();
        $pokemon->nombre = $request->input("nombre");
        $pokemon->id = $request->input("identificador");
        $pokemon->tipo = $request->input("tipo");
        $pokemon->descripcion = $request->input("descripcion");
        $pokemon->save();
        */
        //Eloquent forma 2
        //dd($request->all()); //inspecciona la variable y finaliza
        Pokemon::create($request->all()); //asignaciom masiva a columnas de la tabla

        return redirect(route('pokemon.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //JQuery builder
        //$pokemon = DB::table("pokemon")->where('id', $id)->first();
        //Eloquent
        $pokemon = Pokemon::findOrFail($id);  //findOrFail captura el error y arroja codigo 404, el cual se puede personalizar añadiendolo como vista.
        return view("pokemon.show",compact("pokemon"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pokemon = Pokemon::findOrFail($id);
        return view("pokemon.edit",compact("pokemon"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //JQuery builder
        /*
        DB::table("pokemon")->where('id', $id)->update([
            "id" => $request->input('identificador'),
            "nombre" => $request->input('nombre'),
            "tipo" => $request->input('tipo'),
            "descripcion" => $request->input('descripcion')
        ]);
        */
        //Eloquent
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());
        return redirect(route('pokemon.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pokemon::findOrFail($id)->delete();
        return redirect(route('pokemon.index'));
    }
}
