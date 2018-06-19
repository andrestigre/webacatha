<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipopaquete extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipopaquetes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_paquete', 'detalle', 'enlace', 'totuloenlace', 'activo'];

    
}
