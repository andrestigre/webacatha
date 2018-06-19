<?php

use Illuminate\Database\Seeder;
use App\Paquete;

class PaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paquete::create( [
'id'=>1,
'detalle'=>'Ventas, Compras, Clientes, Proveedores, Impuestos (ideal para registrar tus gastos personales)',
'periodo'=>'mes',
'precio'=>25.00,
'estado'=>1,
'tipopaquete_id'=>1
] );

			
Paquete::create( [
'id'=>2,
'detalle'=>'Ventas, Compras, Clientes, Proveedores, Contabilidad, Inventarios, Caja - Bancos, Impuestos',
'periodo'=>'mes',
'precio'=>35.00,
'estado'=>1,
'tipopaquete_id'=>2
] );

			
Paquete::create( [
'id'=>3,
'detalle'=>'Ventas, Compras, Clientes, Proveedores, Contabilidad, Inventarios, Caja - Bancos, Impuestos, Activos Fijos, Nómina',
'periodo'=>'mes',
'precio'=>59.00,
'estado'=>1,
'tipopaquete_id'=>3
] );

			
Paquete::create( [
'id'=>4,
'detalle'=>'Diseña tu paquete a la medida',
'periodo'=>'mes',
'estado'=>1,
'tipopaquete_id'=>4
] );

    }
}
