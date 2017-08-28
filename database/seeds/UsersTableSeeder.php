<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		factory(Proyecto1\Modelos\User::class)->create([
            'name' => 'Chico',
            'email' => 'chico@gmail.com',
            'password' => bcrypt('123456'),
        ]);
		
		factory(Proyecto1\Modelos\User::class, 7)->create();
    }
}
