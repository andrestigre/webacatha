<?php

use Illuminate\Database\Seeder;
use App\Soporte;

class SoporteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soporte::create( [
'id'=>1,
'titulo'=>'Soporte al cliente',
'detalle'=>'Queremos conocer tus necesidades, comunícate con nosotros para continuar haciendo de ACATHA algo único.',
'section_color'=>'gray-section',
'activo'=>1,
'itemnav_id'=>4
] );

        
    }
}
