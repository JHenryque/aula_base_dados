<?php

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
