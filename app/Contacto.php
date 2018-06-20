<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contactos';

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
    protected $fillable = ['titulo', 'contenido', 'enlaceboton', 'textoboton', 'estado', 'social_fb', 'social_tw', 'social_gg', 'social_in', 'latitud', 'longitud', 'section_color', 'itemnav_id'];

    public function Itemnav()
    {
        return $this->belongsTo('App\Itemnav');
    }
    
}
