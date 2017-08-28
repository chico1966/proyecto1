<?php

use Illuminate\Database\Seeder;

class EsculturasTableSeeder extends Seeder
{

    public function run()
    {
        factory(Proyecto1\Modelos\Escultura::class, 50)->create();

    }
}
