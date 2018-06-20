<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'precios';

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
    protected $fillable = ['itemnav_id', 'contenido', 'section_color', 'activo', 'enlace'];

    public function Itemnav()
    {
        return $this->belongsTo('App\Itemnav');
    }
    
}
