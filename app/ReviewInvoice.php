<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewInvoice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'review_invoices';

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
    protected $fillable = ['title', 'price', 'pack', 'payment_status', 'detall', 'tipopaquete_id', 'tipo_paquete', 'cli_nombre', 'cli_email', 'cli_contacto'];

    
}
