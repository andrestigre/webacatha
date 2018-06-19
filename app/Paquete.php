<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paquetes';

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
    protected $fillable = ['detalle', 'precio', 'periodo','estado', 'tipopaquete_id'];

    public function Tipopaquete()
    {
        return $this->belongsTo('App\Tipopaquete');
    }
    
}
