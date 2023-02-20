<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroConcurso extends Model
{
    // protected $primaryKey = 'id_registro_concurso';

    // protected $table = 'registro_concurso';
    // protected $fillable = [];

    protected $connection = "pcete";
    protected $primaryKey = 'id_registro_concurso';
    protected $table = 'cdvs_registro_concurso';
    protected $fillable = [];

}