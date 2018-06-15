<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemcomprobante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemcomprobantes';

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
    protected $fillable = ['item_comprobante', 'contenido', 'efecto', 'estado', 'comprobante_id','textalinear'];

    public function Comprobante()
    {
        return $this->belongsTo('App\Comprobante');
    }
    
}
