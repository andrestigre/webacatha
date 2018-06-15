<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create( [
    		'id'=>1,
    		'titulo'=>'SOFTWARE',
    		'itemuno'=>'ADMINISTRATIVO',
    		'itemdos'=>'CONTABLE',
    		'itemtres'=>'FINANCIERO',
    		'detalle'=>'ácatha es la forma rápida, ágil y<br/> segura de manejar tu negocio',
    		'imagen'=>'uploads/slider/45438.header_5.jpg',
    		'video_background'=>'1',
    		'enlace_video'=>'https://www.youtube.com/embed/0UZYmITClHo?rel=0&autoplay=1',
    		'estado'=>'1'
    	] );

    	Slider::create( [
    		'id'=>2,
    		'titulo'=>'SOPORTE',
    		'itemuno'=>'RAPIDO',
    		'itemdos'=>'24/7',
    		'itemtres'=>'ACCESO REMOTO',
    		'detalle'=>'Atención inmediata y soporte en linea.',
    		'imagen'=>'uploads/slider/14220.header_6.jpg',
    		'video_background'=>'0',
    		'estado'=>'0'
    	] );


    }
}
