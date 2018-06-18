<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemsoporte extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemsoportes';

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
    protected $fillable = [ 'titulo', 'contenido', 'enlace', 'tituloenlace', 'icono', 'tituloanexo', 'textoanexo', 'estado', 'soporte_id'];

    public function Soporte()
    {
        return $this->belongsTo('App\Soporte');
    }
    
}
