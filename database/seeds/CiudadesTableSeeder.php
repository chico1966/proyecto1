<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    public function run()
    {
        factory(Proyecto1\Modelos\Ciudad::class, 4)->create();
    }
}
