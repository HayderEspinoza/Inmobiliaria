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
        $this->call(TipoTableSeeder::class);
        $this->call(CiudadTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

