<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaPaquete extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'caracteristica_paquetes';

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
    protected $fillable = ['car_paquete', 'estado', 'paquete_id'];

    public function Paquete()
    {
        return $this->belongsTo('App\Paquete');
    }
    
}
