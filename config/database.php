<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
/*Del archivo .env
DB_CONNECTION=pgsql
DB_HOST=ec2-54-247-175-255.eu-west-1.compute.amazonaws.com
DB_PORT=5432
DB_DATABASE=df8aj5kus20p0o
DB_USERNAME=tkkpjsqgqktblo
DB_PASSWORD=8e37a9fb3d61fa92f51c754e2f5f11c42bf72bee5d48c6cd2dcd19a203c3d60a
*/

    'default' => env('DB_CONNECTION', 'pgsql'),


    'connections' => [

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'ec2-54-247-175-255.eu-west-1.compute.amazonaws.com'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'df8aj5kus20p0o'),
            'username' => env('DB_USERNAME', 'tkkpjsqgqktblo'),
            'password' => env('DB_PASSWORD', '8e37a9fb3d61fa92f51c754e2f5f11c42bf72bee5d48c6cd2dcd19a203c3d60a'),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
