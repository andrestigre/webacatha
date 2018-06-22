<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
    	'title', 
    	'price', 
    	'payment_status',
    	'pack',
    	'detall',
    	'periodo',
    	'tipopaquete_id',
        'tipo_paquete',
        'cli_nombre',
        'cli_email',
    	'cli_contacto'
    ];

    public function getPaidAttribute() {
    	if ($this->payment_status == 'Invalid') {
    		return false;
    	}
    	return true;
    }

}
