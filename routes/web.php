<?php

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

Route::get('/bem-vindo', function () {
    echo ('ola mundo');
});

Route::get('/', function () {
    echo ('<h1>ola mundo</h1>');
});

Route::get('/bem-vindo', function () {
    echo ('<h1>Esta é a pagina que lhe dará as boas vindas</h1>');
});

Route::get('/bem-vindo/aedah', function () {
    echo ('<h1>esta é so para o Agrupamento :)</h1>');
});

Route::get('/nome/{nome}', function ($nome) {
    echo ('<h1>Olá'. $nome .'</h1>');
});

Route::get('/nome/{nome}/{apelido}', function ($nome, $apelido) {
    echo ('<h1>Olá'. $nome .''.$apelido. '</h1>');
});

Route::get('/repetir/{nome}/{num}', function ($nome, $n) {
 $numero = is_numeric ($n) ? $n : 5;
	for ($i=0; $i<$numero;$i++){
    	echo ('<h1>Olá'.$nome.'</h1>');
};
return;
});

Route::get('/bemvindo/', function () {
    return view ('bemvindo');
});

Route::get('/nome/{nome}/{apelido}',
 function ($nome=null,$apelido=null) {
 	return view('mostranome',[
 		'nome' =>$nome,
 		'apelido' => $apelido
 	]);
});

Route::get('/tarefas', function () {
 	$tarefas =[
 		'Comprar senha',
 		'Imprimir fotocópias',
 		'Carregar catão'
 	];
 	return view ('tarefas',[
 	 'tarefas'=>$tarefas
 	]);
});
