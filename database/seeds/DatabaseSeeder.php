<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(CaracteristicaTableSeeder::class);
        $this->call(ItemCaracteristicaTableSeeder::class);
        $this->call(ComprobanteTableSeeder::class);
        $this->call(ItemComprobanteTableSeeder::class);
        $this->call(SoporteTableSeeder::class);
        $this->call(ItemsoporteTableSeeder::class);
        $this->call(TipopaqueteTableSeeder::class);
        $this->call(PaqueteTableSeeder::class);
        $this->call(CaracteristicaPaqueteTableSeeder::class);
    }
}
