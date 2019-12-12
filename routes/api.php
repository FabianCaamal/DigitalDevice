<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});

Route::get('/reporte/dinero/{fechaIni}/{fechaFin}', 'Services\ServiciosDispenser@RDinero');
Route::get('/reporte/venta/{fechaIni}/{fechaFin}', 'Services\ServiciosDispenser@RVentas');
Route::get('/reporte/contador/{producto_id}', 'Services\ServiciosDispenser@Contador');

Route::get('/surtir/{producto_id}/{maquina_id}/{cantidad}', 'Services\ServicioAdd@Surtir');

Route::get('/contarQuejas/{usuario_id}','Services\QuejaContador@ContarQueja');

Route::get('/venta/{producto_id}/{maquina_id}', 
	'Services\ServicioAlmacenamientoVenta@dineroVenta');

Route::get('/busquedaProducto/{name}', 'Services\BuscarServicio@searchProducto');
Route::get('/busquedaMaquina/{name}', 'Services\BuscarServicio@searchMaquina');
