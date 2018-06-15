<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemcaracteristica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemcaracteristicas';

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
    protected $fillable = ['item_caracteristica', 'detalle', 'iconuno', 'icondos', 'icontres', 'iconcuatro', 'iconcinco', 'iconseis', 'estado', 'caracteristica_id'];

    public function Caracteristica()
    {
        return $this->belongsTo('App\Caracteristica');
    }
    
}
