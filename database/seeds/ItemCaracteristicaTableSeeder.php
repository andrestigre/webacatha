<?php

use Illuminate\Database\Seeder;
use App\ItemCaracteristica as Itemcaracteristica;

class ItemCaracteristicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Itemcaracteristica::create( [
'id'=>1,
'item_caracteristica'=>'MULTIPLATAFORMA',
'detalle'=>'Nuestra aplicaciones se encuentran disponibles para diferentes tipos de dispositivos y para tu sistema operativo a elección.',
'iconuno'=>'fa fa-windows fa-2x',
'icondos'=>'fa fa-linux fa-2x',
'icontres'=>'fa fa-apple fa-2x',
'iconcuatro'=>NULL,
'iconcinco'=>NULL,
'iconseis'=>NULL,
'estado'=>1,
'caracteristica_id'=>1,
'created_at'=>'2018-06-14 20:39:25',
'updated_at'=>'2018-06-15 04:37:03'
] );


			
Itemcaracteristica::create( [
'id'=>2,
'item_caracteristica'=>'INTUITIVO',
'detalle'=>'De fácil navegación, experimenta un producto con un diseño fluido sin muchos clicks, sin dar muchas vueltas o varios intentos',
'iconuno'=>'fa fa-hand-o-up fa-2x',
'icondos'=>'fa fa-eye fa-2x',
'icontres'=>'fa fa-universal-access fa-2x',
'iconcuatro'=>'edt',
'estado'=>1,
'caracteristica_id'=>1,
'created_at'=>'2018-06-14 22:30:52',
'updated_at'=>'2018-06-15 04:44:26'
] );


			
Itemcaracteristica::create( [
'id'=>3,
'item_caracteristica'=>'SEGURO',
'detalle'=>'Dispondrás de toda tu información organizada y segura gracias a la integracion de servicios como Amazon Cloud Services',
'iconuno'=>'fa fa-shield fa-2x',
'icondos'=>'fa fa-lock fa-2x',
'icontres'=>'fa fa-cloud fa-2x',
'iconcuatro'=>'fa fa-globe fa-2x',
'estado'=>1,
'caracteristica_id'=>1,
'created_at'=>'2018-06-15 09:49:33',
'updated_at'=>'2018-06-15 09:49:33'
] );


			
Itemcaracteristica::create( [
'id'=>4,
'item_caracteristica'=>'SOPORTE',
'detalle'=>'Actualizaciones permanentes, asesoría en linea, capacitaciones en todo momento con mas de 300 aplicativos disponibles para gestionar tu empresa.',
'iconuno'=>'fa fa-phone-square fa-2x',
'icondos'=>'fa fa-info-circle fa-2x',
'icontres'=>'fa fa-ticket fa-2x',
'iconcuatro'=>'fa fa-envelope fa-2x',
'estado'=>1,
'caracteristica_id'=>1,
'created_at'=>'2018-06-15 09:51:18',
'updated_at'=>'2018-06-15 09:51:18'
] );
    }
}
