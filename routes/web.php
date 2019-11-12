    
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

Route::get('/empresa', function () {
    return view('login');
});

Route::get('/administrador', 'todoController@admi');
Route::get('/invitado', 'todoController@invitado');
Route::get('/suscripcion', 'todoController@suscripcion');


Route::group(['middleware' => 'readwrite'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.

    #adminlte_routes
});
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.

    Route::get('/', 'HomeController@index')
	->name("home");
    #adminlte_routes
});

//Route::resource('empresa', 'EmpresaController');
Route::resource('usuario', 'usuarioController');
Route::resource('maquina', 'maquinaController');
Route::resource('empleado', 'empleadoController');
Route::resource('trabajo', 'TrabajoController');
Route::resource('producto', 'ProductoController');
Route::resource('empleado', 'EmpleadoController');
Route::resource('queja', 'QuejaController');
Route::resource('empresa', 'EmpresaController');
Route::resource('empleado', 'EmpleadoController');
Route::resource('venta', 'VentaController');
Route::resource('producto', 'ProductoController');
Route::resource('producto', 'ProductoController');
Route::resource('producto', 'ProductoController');
Route::resource('venta', 'VentaController');
Route::resource('venta', 'VentaController');
Route::resource('venta', 'VentaController');
Route::resource('maquina', 'MaquinaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('maquina', 'MaquinaController');
Route::resource('trabajo', 'TrabajoController');
Route::resource('maquina', 'MaquinaController');
Route::resource('stock', 'StockController');
Route::resource('stock', 'StockController');
Route::resource('queja', 'QuejaController');