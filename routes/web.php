<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class );

route::controller(CursoController::class)->group(function(){
    route::get('cursos', 'index' );
    route::get('cursos/create', 'create');
    route::get('cursos/{curso}/{categoria?}', 'show' );

});



/*
route::get('cursos', [CursoController::class, 'index'] );
route::get('cursos/create', [CursoController::class, 'create'] );
route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show'] );
*/



/*
Route::get('laravel', function () {
    return view('welcome');
});

route::get('cursos', function () {
    return "bienvenido a los cursos";
});

route::get('cursos/create', function () {
    return 'aqui puedes crear cursos';

});

Route::get('cursos/{curso}', function ($curso) {
    return view("bienvenido al curso: $curso");
});

route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if ($categoria) {
        return "bienvenido al curso $curso, de la categoría $categoria";
    }
    else {
        return "bienvenido al curso: $curso";
    }
});
*/
