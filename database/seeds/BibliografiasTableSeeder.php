<?php

use Illuminate\Database\Seeder;

class BibliografiasTableSeeder extends Seeder
{

    public function run()
    {
        factory(Proyecto1\Modelos\Bibliografia::class, 75)->create();
    }
}
