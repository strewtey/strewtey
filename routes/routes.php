<?php
use Scraps\Request\Request /*as Co_Req*/;

Route::error(404, function(){
	view('layouts.web.errorcode', ['datas' => [
		'code' => '404',
		'message' => response('routes:404')
	]]);
});
// Route::domain(['routes.api', 'www.routes.api'])->group(function(){
// 	Route::get('/', 'App\Controllers\Api@index');
// 	Route::get('/lol', 'App\Controllers\Api@index');
// });
	// include_once ROOT . '\routes\internal-url.php';
	// include_once ROOT . '\routes\component.php';


	// Route::get('/404', function (){ view('error.404'); http_response_code(404); exit(); })->name('404');








// Route::get(['/home', '/'], [App\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/callable', function(){
// 	echo "string";
// })->name('call');
// Route::get('/services', 'App\Controllers\HomeController@services')->name('services');
// Route::get('/services/{name}/{name0}/{name1}', 'App\Controllers\HomeController@services')->name('services-n');
// Route::fallback(function(){
// 	View::render('error.404');
// });
// Dependance Injection
	// Route::get('/welcome/{lorem}', function(Request|int $req = null, $lorem = null){
	// 	var_dump($req);
	// });
Route::get('/', function(){
	view('pages.public.web.welcome');
});