<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comprobantes';

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
    protected $fillable = ['itemnav_id', 'detalle', 'contenido', 'imagen', 'section_color', 'activo', 'enlace', 'titulofinal'];

    public function Itemnav()
    {
        return $this->belongsTo('App\Itemnav');
    }
    
}
