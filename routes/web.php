<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


   /*
    $faker = Faker\Factory::create();
    // generate data by calling methods
    
    for($i=0; $i<=10;$i++){
        $insert = "INSERT INTO emails (id_email, de, para, cc, cco, usuario_envio, mensagem, dt_cadastro, assunto, processamento) VALUES (NULL, '".$faker->email()."', '".$faker->email()."', NULL, NULL, '560824', '<html>".$faker->text()."</html>', '".date('Y-m-d H:i:s')."', '".$faker->text($maxNbChars = 50)."', '1');";
        echo $insert;
    }*/
   
    
    return redirect('emails');

});


Route::get('emails', 'Email@index')->name('email.index');
Route::get('emailById', 'Email@listarEmailById')->name('caregar.email.unico');
