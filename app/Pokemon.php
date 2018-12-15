<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = "pokemon";
    protected $fillable = ['id','nombre','descripcion','tipo'];  //Campos que se permitiran añadir masivamente a nuestra tabla
}