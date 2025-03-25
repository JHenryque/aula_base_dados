<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::view('/','home');

Route::get('/db',function(){

    try {

        DB::connection()->getPdo();
        echo "Conexão com a base de dados com sucessos: " . DB::connection()->getDatabaseName();

    } catch (\Exception $th) {
        die("não foi possivel conectar ao banco de dados erro: " . $th->getMessage());
    }
});
