<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Categorias;

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
    return view('welcome');
});

route::get("paises" , function()
{
    $paises = 
    [
        "Colombia"=>[
            "cap"=> "Bogotá",
            "mon"=> "Peso COP",
            "pob"=> 51,
            "ciu"=> [
                "Medellin",
                "Cali",
                "Pereira",
                "Cartagena"
            ]
        ],
        "Ecuador"=>[
            "cap"=> "Quito",
            "mon"=> "Dolar",
            "pob"=> 20,
            "ciu"=> [
                "Cuenca",
                "Guayaquil",
                "Ecuador"
            ]
        ],
            "Mexico"=>[
                "cap"=> "C.Mexico",
                "mon"=> "Peso MXC",
                "pob"=> 130,
                "ciu"=> [
                    "Sinaloa",
                    "Monterrey",
                    "Guadalajara",
                ]
                ],
    ];

    return view("paises")
    ->with("paises", $paises);
});

Route::get('prueba' , function(){
    
    //seleccionar todas las marcas
    $Marca = Marca::all();
    //seleccionar categorias
    $Categorias = Categorias::all();
    //ingresar marcas y categorias a la vista
    return view('productos.create')
                ->with('Categorias' , $Categorias)
                ->with('marca' , $Marca);

});


