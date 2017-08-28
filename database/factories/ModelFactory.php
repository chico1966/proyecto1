<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Proyecto1\Modelos\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Proyecto1\Modelos\Ciudad::class, function (Faker\Generator $faker) {
    

    return [
        'nombre' => $faker->unique()->randomElement($array = array('Hispalis', 'Corduba', 'Astigi', 'Onuba')),
		'conventus' => $faker->randomElement($array = array('Hispalensis', 'Cordubensis', 'Astigitanus', 'Gaditanus')),
		'categoria' => $faker->randomElement($array = array('Municipium', 'Coloniae')),
		'extension' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
		'localizacion' => $faker->name,
		'municipio' => $faker->name,
		'provincia' => $faker->name,
		'tipoYacimiento'=> $faker->randomElement($array = array('Despoblado', 'Superpuesto')),
		'cronologia' => $faker->text(200),
        'coord_x' => $faker->latitude($min = 36.884526, $max = 38.816670), // 77.147489
        'coord_y' => $faker->longitude($min = -6.970617, $max = -3.743383), // 86.211205
        'remember_token' => str_random(10),
    ];
});

//----------------------//
//Ventana del mapa:
//38.816670, -6.970617
//36.884526, -3.743383//

$factory->define(Proyecto1\Modelos\Escultura::class, function (Faker\Generator $faker) {


    return [
        'ciudad' => $faker->randomElement($array = array('Hispalis', 'Corduba', 'Astigi', 'Onuba')),
        'definicion' => $faker->randomElement($array = array('Friso', 'Thoacato', 'Ecuestre', 'Busto')),
        'tipoEscultura' => $faker->randomElement($array = array('Ecuestre', 'Busto', 'Friso', 'Thoacato')),
        'procedencia' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'contexto' => $faker->name,
        'hallazgoCasual' => $faker->name,
        'localizacioActual' => $faker->name,
        'estadoConservacion'=> $faker->randomElement($array = array('Bueno', 'Malo', 'Regular')),
        'material' => $faker->randomElement($array = array('Arcilla', 'Oro', 'Plata', 'Bronce', 'Madera', 'Hierro')),
        'cronologia' => $faker->text(200),
        'dimensiones' => $faker->regexify('[0-9]+[0-9]+,+[0-9]+m X [0-9]+[0-9]+,+[0-9]+m'),
        'restaurada' => $faker->boolean,
        'restoPolicromia' => $faker->name,
        'paralelos' => $faker->text(1000),
        'remember_token' => str_random(10),
    ];
});

/*'ciudad', 'definicion', 'tipoEscultura', 'procedencia', 'contexto', 'hallazgoCasual', 'localizacioActual', 'estadoConservacion',
        'material', 'cronologia', 'dimensiones', 'restaurada', 'restoPolicromia', 'paralelos', 'informacionGrafica',*/

$factory->define(Proyecto1\Modelos\Bibliografia::class, function (Faker\Generator $faker) {


    return [
        'idElemento' => $faker->biasedNumberBetween($min = 5, $max = 61, $function = 'sqrt'),
        'referencia' => $faker->text(250),
        'remember_token' => str_random(10),
    ];
});

/*$table->increments('id')->unique();
$table->integer('idElemento')->unsigned();
$table->string('referencia');*/