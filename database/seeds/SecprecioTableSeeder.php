<?php

use Illuminate\Database\Seeder;
use App\Precio;

class SecprecioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Precio::create( [
'id'=>1,
'contenido'=>'<p>* Todos los planes inician con 3 usuarios.</p><p>** No incluyen Modulos Especiales</p><p>*** Los valores no incluyen impuestos</p><p>**** Costo por documento emitido 0.01 ctv para Facturacion Electr&oacute;nica</p>',
'section_color'=>'white',
'activo'=>1,
'itemnav_id'=>5
] );
    }
}
