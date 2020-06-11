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

// Ruta con nombres
/*Route::get('/', function () {
    //return view('welcome');
    //return "Hola Blog";
    echo "Hola este es mi blog"."<br>";
	echo "<a href='" . route('articulos') . "'>Articulos 1 </a><br>";
	echo "<a href='" . route('articulos') . "'>Articulos 2 </a><br>";
	echo "<a href='" . route('articulos') . "'>Articulos 3 </a><br>";
	echo "<a href='" . route('articulos') . "'>Articulos 4 </a><br>";
	echo "<a href='" . route('articulos') . "'>Articulos 5 </a><br>";

});
Route::get('mis_articulos', function () {
    //return view('welcome');
    return "Aqui estan todos mis articulos";
})->name('articulos');*/

// Abriendo una ruta pasando parametros obligatorios
/*Route::get('saludo/{nombre}', function ($nombre) {
    //return view('welcome');
    return "Saludos " . $nombre;
});*/

// Abriendo una ruta pasando parametros NO obligatorios
/*Route::get('saludo/{nombre?}', function ($nombre = 'Invitado') {
    //return view('welcome');
    return "Saludos " . $nombre;
});*/

/*Route::get('contacto', function () {
    //return view('welcome');
    return "Contacto";
});*/



// AHORA VAMOS A CARGAR LA VISTA HOME CON UN PARAMETRO NOMBRE DE VARIAS MANERAS
// MODO VARIABLE INDIVIDUAL
/*Route::get('/', function () {
    $nombre = "Antonio";
    return view('home')->with('nombre', $nombre);
})->name('home');*/

// MODO ARREGLO 1
/*Route::get('/', function () {
    $nombre = "Antonio";
    return view('home')->with(['nombre' => $nombre]);
})->name('home');*/

// MODO ARREGLO 2
/*Route::get('/', function () {
    $nombre = "Antonio";
    return view('home', ['nombre' => $nombre]);
})->name('home');*/

// MODO FUNCION COMPACT
/*Route::get('/', function () {
    $nombre = "Antonio";
    return view('home', compact('nombre'));
})->name('home');*/

// MODO RESUMIDO
/*Route::view('/', 'home');*/

// MODO RESUMIDO CON ARREGLO
/*Route::view('/', 'home', ['nombre' => 'Antonio']);*/

// Esta seccion ahora va para el controlador PortafolioController
/*$portafolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
];*/

// Forma apropiada para llamar las rutas
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
// Esta linea se comenta porque ahora se implementa el uso del controlador para Portafolio
// Route::view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');
// Comando utilizado: 
//    php artisan make:controller PortafolioController -i
//    Este comando crea el controlador con una unica function __invoke
//  Usando Rutas sin el metodo resourse
/*Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
//Route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');

Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');*/


//  Usando Rutas con el metodo resourse
Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);


// Comando utilizado: 
//    php artisan make:controller Portafolio2Controller -r
//    Este comando crea el controlador con las funciones requeridas normalmente
//      Index, Update, Create, Destroy, 
//    Aqui resalto que aunque uso otro controlador llamo a la misma vista portafolio
Route::get('/portafolio2', 'Portafolio2Controller@index')->name('portafolio2');
//  Para manejar el formulario de contacto
Route::post('contact', 'ContactoController@store');


Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
