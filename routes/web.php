<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::view('/','home');

Route::get('/mysql',function(){

    try {

        DB::connection()->getPdo();
        echo "Conexão com a base de dados com sucessos: " . DB::connection()->getDatabaseName();

    } catch (\Exception $th) {
        die("não foi possivel conectar ao banco de dados erro: " . $th->getMessage());
    }
});

Route::get('/sqlite',function(){
    try {
        DB::connection()->getPdo();
        echo "Conexão com a base de dados com sucessos: " . DB::connection()->getDatabaseName();
    } catch (\Exception $th) {
        die("não foi possivel conectar ao banco de dados erro: " . $th->getMessage());
    }
});

Route::get('/mysql_test_two_databases',function(){
    try {
        // primeira base de dadeos
        DB::connection('mysql_users')->getPdo();
        echo "Conexão com a base de dados com sucessos: " . DB::connection('mysql_users')->getDatabaseName();
        echo '<hr>' . '<br>';

        // segunda base de dadeos
        DB::connection('mysql_app')->getPdo();
        echo "Conexão com a base de dados com sucessos: " . DB::connection('mysql_app')->getDatabaseName();
        echo '<hr>' . '<br>';
    } catch (\Exception $th) {
        die("não foi possivel conectar ao banco de dados erro: " . $th->getMessage());
    }
});

Route::get('/mysql_teste',function(){
    try {
        Config::set('database.connections.crud', [
            'driver' => 'mysql',
            'url' => '',
            'host' => 'localhost',
            'port' => 3306,
            'database' => 'laravel_mysql_auth',
            'username' => 'user_laravel_mysql_database',
            'password' => 'vIJuFufof4X1VaxecoLu5eGA22SiF4',
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                    PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA') ]): [],
            ]);

        DB::connection('crud')->getPdo();
        echo "sucessos: ";
        echo '<hr>' . '<br>';
    } catch (\Exception $th) {
        die("não foi possivel conectar ao banco de dados erro: " . $th->getMessage());
    }
});

Route::get('/mysql_user',function(){
    DB::connection('mysql')->getPdo();
    echo "ok";
});
