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
            'caracteristica_id'=>1
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
            'caracteristica_id'=>1
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
            'caracteristica_id'=>1
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
            'caracteristica_id'=>1
        ] );

        

        Itemcaracteristica::create( [
            'id'=>5,
            'item_caracteristica'=>'POS',
            'detalle'=>'Aplicaciónes adaptadas para negocios que tienen facturación recurrente a traves de equipos touch o similares',
            'iconuno'=>'fa fa-desktop features-icon',
            'estado'=>1,
            'alinear'=>1,
            'caracteristica_id'=>2
        ] );

        

        Itemcaracteristica::create( [
            'id'=>6,
            'item_caracteristica'=>'Móvil',
            'detalle'=>'Tu negocio a donde vayas y en tu bolsillo, maneja tu empresa desde cualquier dispositivo móvil.',
            'iconuno'=>'fa fa-mobile features-icon',
            'estado'=>1,
            'alinear'=>1,
            'caracteristica_id'=>2
        ] );

        

        Itemcaracteristica::create( [
            'id'=>7,
            'item_caracteristica'=>'E-commerce',
            'detalle'=>'E-commerce',
            'iconuno'=>'fa fa-shopping-cart features-icon',
            'estado'=>1,
            'alinear'=>1,
            'caracteristica_id'=>2
        ] );

        

        Itemcaracteristica::create( [
            'id'=>8,
            'item_caracteristica'=>'Backups',
            'detalle'=>'Tu información respaldada de forma automatica siempre en servidores alojados en varios puntos del mundo.',
            'iconuno'=>'fa fa-hdd-o features-icon',
            'estado'=>1,
            'alinear'=>0,
            'caracteristica_id'=>2
        ] );

        

        Itemcaracteristica::create( [
            'id'=>9,
            'item_caracteristica'=>'En la nube',
            'detalle'=>'Nuestra infraestructura esta apoyada por una nube que ofrece seguridad y disponibilidad 24/7.',
            'iconuno'=>'fa fa-cloud features-icon',
            'estado'=>1,
            'alinear'=>0,
            'caracteristica_id'=>2
        ] );

        

        Itemcaracteristica::create( [
            'id'=>10,
            'item_caracteristica'=>'Integrable',
            'detalle'=>'Integra tus aplicaciones a Acatha mediante API\'s o através de servicios web.',
            'iconuno'=>'fa fa-globe features-icon',
            'estado'=>1,
            'alinear'=>0,
            'caracteristica_id'=>2
        ] );


    }
}
