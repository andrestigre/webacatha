<?php

use Illuminate\Database\Seeder;
use App\Caracteristica;

class CaracteristicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caracteristica::create( [
    		'id'=>1,
    		'contenido'=>'Acatha no es solo un sistema contable, ACATHA es una herramienta potente que te permiirá gestionar tu negocio de la manera mas rápida, sencilla e intuititiva, contamos con herramientas que te permitirán gestionar Nomina, Importaciones, Activos Fijos, ISP, Producción, Restaurantes, Eventos y más todo vinculado contablemente bajo normativas tributarias que permiten a tu contador realizar declaraciones sin contratiempos.',
    		'section_color'=>'white',
    		'activo'=>'1',
    		'itemnav_id'=>'2'
    	] );
    }
}
