<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'caracteristicas';

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
    protected $fillable = ['itemnav_id', 'contenido', 'section_color', 'activo'];

    public function Itemnav()
    {
        return $this->belongsTo('App\Itemnav');
    }

    
}
