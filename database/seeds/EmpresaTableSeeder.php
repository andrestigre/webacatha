<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create( [
    		'id'=>1,
    		'empresa'=>'acatha',
    		'descripcion'=>'ácatha y AustroSoft son marcas registradas de AustroSoft Cia Ltda.',
    		'telefono'=>'+593 98 976 5272',
    		'email'=>'comercializacion@austrosoft.com.ec',
    		'logo'=>'uploads/empress/53642.logo_acatha_min.png'
    	] );
    }
}
