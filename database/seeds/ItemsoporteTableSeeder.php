<?php

use Illuminate\Database\Seeder;
use App\Itemsoporte;

class ItemsoporteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Itemsoporte::create( [
'id'=>1,
'titulo'=>'Call Center',
'contenido'=>'Si tienes preguntas, o deseas implementar nuevos procesos comunícate con nosotros.',
'icono'=>'fa fa-mobile',
'tituloanexo'=>'Teléfonos',
'textoanexo'=>'T: (593) 72818447 (593) 74091633',
'estado'=>1,
'soporte_id'=>1
] );


			
Itemsoporte::create( [
'id'=>2,
'titulo'=>'Team Viewer',
'contenido'=>'Ofrecemos soporte remoto con la herramienta número uno del mercado de forma inmediata no precencial.',
'icono'=>'fa fa-desktop',
'tituloanexo'=>'Soporte Remoto',
'textoanexo'=>'all-in-one',
'estado'=>1,
'soporte_id'=>1
] );


			
Itemsoporte::create( [
'id'=>3,
'titulo'=>'Jira',
'contenido'=>'Aplicación diseñada para el seguimiento de errores, incidentes y para la gestión operativa de nuevos proyectos.',
'icono'=>'fa fa-cogs',
'tituloanexo'=>'Jira',
'textoanexo'=>'Service Desk',
'estado'=>1,
'soporte_id'=>1
] );
    }
}
