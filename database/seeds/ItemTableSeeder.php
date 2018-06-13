<?php

use Illuminate\Database\Seeder;
use App\Itemnav;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Itemnav::create( [
    		'id'=>1,
    		'item_nav'=>'INICIO',
    		'enlace'=>'#page-top'
    	] );

    	Itemnav::create( [
    		'id'=>2,
    		'item_nav'=>'Caracteristicas',
    		'enlace'=>'#features'
    	] );

    	Itemnav::create( [
    		'id'=>3,
    		'item_nav'=>'Facturación Electrónica',
    		'enlace'=>'#electronicos'
    	] );

    	Itemnav::create( [
    		'id'=>4,
    		'item_nav'=>'Soporte',
    		'enlace'=>'#soporte'
    	] );

    	Itemnav::create( [
    		'id'=>5,
    		'item_nav'=>'Precios',
    		'enlace'=>'#pricing'
    	] );

    	Itemnav::create( [
    		'id'=>6,
    		'item_nav'=>'Contacto',
    		'enlace'=>'#contact'
    	] );

    	Itemnav::create( [
    		'id'=>7,
    		'item_nav'=>'Edocs',
    		'enlace'=>'http://www.acatha.com/edocs/'
    	] );

    	Itemnav::create( [
    		'id'=>8,
    		'item_nav'=>'Login',
    		'enlace'=>'https://prd.acatha.com'
    	] );




    }
}
