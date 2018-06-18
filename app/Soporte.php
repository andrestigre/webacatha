<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'soportes';

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
    protected $fillable = ['itemnav_id', 'titulo','detalle', 'section_color', 'activo', 'enlace','tituloenlace', 'titulofinal'];

    public function Itemnav()
    {
        return $this->belongsTo('App\Itemnav');
    }

}
