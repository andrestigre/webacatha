<?php

use Illuminate\Database\Seeder;
use App\Tipopaquete;


class TipopaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipopaquete::create( [
'id'=>1,
'tipo_paquete'=>'Basic',
'detalle'=>'basic',
'enlace'=>'#',
'totuloenlace'=>'Comprar',
'activo'=>1
] );
			
Tipopaquete::create( [
'id'=>2,
'tipo_paquete'=>'Flex',
'detalle'=>'Flex',
'enlace'=>'#',
'totuloenlace'=>'Comprar',
'activo'=>1
] );
			
Tipopaquete::create( [
'id'=>3,
'tipo_paquete'=>'Lite',
'detalle'=>'Lite',
'enlace'=>'#',
'totuloenlace'=>'Comprar',
'activo'=>1
] );
			
Tipopaquete::create( [
'id'=>4,
'tipo_paquete'=>'Modular',
'detalle'=>'Modular',
'enlace'=>'#',
'totuloenlace'=>'Contáctenos',
'activo'=>1
] );
    }
}
