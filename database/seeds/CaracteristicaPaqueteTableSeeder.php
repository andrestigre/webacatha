<?php

use Illuminate\Database\Seeder;
use App\CaracteristicaPaquete as Caracteristicapaquete;

class CaracteristicaPaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caracteristicapaquete::create( [
'id'=>1,
'car_paquete'=>'Backups (mensuales)',
'estado'=>1,
'paquete_id'=>1
] );
			
Caracteristicapaquete::create( [
'id'=>2,
'car_paquete'=>'App POS(Punto de Venta)',
'estado'=>1,
'paquete_id'=>1
] );
			
Caracteristicapaquete::create( [
'id'=>3,
'car_paquete'=>'Capacitaciones',
'estado'=>1,
'paquete_id'=>1
] );
			
Caracteristicapaquete::create( [
'id'=>4,
'car_paquete'=>'Reportes',
'estado'=>1,
'paquete_id'=>2
] );
			
Caracteristicapaquete::create( [
'id'=>5,
'car_paquete'=>'Backups (semanales)',
'estado'=>1,
'paquete_id'=>2
] );
			
Caracteristicapaquete::create( [
'id'=>6,
'car_paquete'=>'App Mobile',
'estado'=>1,
'paquete_id'=>2
] );
			
Caracteristicapaquete::create( [
'id'=>7,
'car_paquete'=>'App POS(Punto de Venta)',
'estado'=>1,
'paquete_id'=>2
] );
			
Caracteristicapaquete::create( [
'id'=>8,
'car_paquete'=>'Capacitaciones',
'estado'=>1,
'paquete_id'=>2
] );
			
Caracteristicapaquete::create( [
'id'=>9,
'car_paquete'=>'Reportes',
'estado'=>1,
'paquete_id'=>3
] );
			
Caracteristicapaquete::create( [
'id'=>10,
'car_paquete'=>'Backups (Diarios)',
'estado'=>1,
'paquete_id'=>3
] );
			
Caracteristicapaquete::create( [
'id'=>11,
'car_paquete'=>'App Mobile',
'estado'=>1,
'paquete_id'=>3
] );
			
Caracteristicapaquete::create( [
'id'=>12,
'car_paquete'=>'App POS(Punto de Venta, Biométrico)',
'estado'=>1,
'paquete_id'=>3
] );
			
Caracteristicapaquete::create( [
'id'=>13,
'car_paquete'=>'Capacitaciones',
'estado'=>1,
'paquete_id'=>3
] );
			
Caracteristicapaquete::create( [
'id'=>14,
'car_paquete'=>'Plataforma de Soporte',
'estado'=>1,
'paquete_id'=>3
] );
			
Caracteristicapaquete::create( [
'id'=>15,
'car_paquete'=>'Reportes, Indicadores de gestión (Dashboards)',
'estado'=>1,
'paquete_id'=>4
] );
			
Caracteristicapaquete::create( [
'id'=>16,
'car_paquete'=>'Backups (Diarios)',
'estado'=>1,
'paquete_id'=>4
] );
			
Caracteristicapaquete::create( [
'id'=>17,
'car_paquete'=>'App Mobile',
'estado'=>1,
'paquete_id'=>4
] );
			
Caracteristicapaquete::create( [
'id'=>18,
'car_paquete'=>'App POS(Punto de Venta, Biométrico, Gift Cards)',
'estado'=>1,
'paquete_id'=>4
] );
			
Caracteristicapaquete::create( [
'id'=>19,
'car_paquete'=>'Capacitación, Seguimiento',
'estado'=>1,
'paquete_id'=>4
] );
			
Caracteristicapaquete::create( [
'id'=>20,
'car_paquete'=>'Plataforma de Soporte',
'estado'=>1,
'paquete_id'=>4
] );
    }
}
