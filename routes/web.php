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
