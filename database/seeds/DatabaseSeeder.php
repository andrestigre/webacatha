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
    }
}
