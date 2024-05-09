<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

/*
Route::get('/posts/{post}/{category}', function ($post, $category) {
    return "Welcome to the posts {$post} to the category {$category}";
});

#The parameter test is optional and if they getn't a value for the path, it will be assigned with a null value
Route::get('/posts/{post}/{category}/{test?}', function ($post, $category, $test = null) {
    if($test){
        return "Welcome to the posts {$post} to the category {$category} and pass the {$test}";
    }
    return "Welcome to the posts {$post} to the category {$category} and pass the {$test}";
});
*/

/*
Methods for the routes:
    GET
    POST
    PUT
    PATCH
    DELETE
    PUT, PATCH and DELETE are different type of post with a functionality added
*/

/*
echo __LINE__
echo __FILE__

$var = "" Esto en bool es falso
TODO número es considerado true excepto el 0
TODA cadena es true expecto el vacio

Match = Switch

echo match($var){
    1 => "Opc 1",
    2 => "Opc 2",
    default => "Opc def"
};


$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $indice => $numero){
    echo "El número $numero está en el indice del arreglo $indice <br>";
}


//Aqui se le está pasando no el valor de la variable sino la variable por referencia.
//Entonces opera sobre la variable y modifica el valor de la misma
$a = 5;
$b = 10;

function test(&$n){
    $n += 10;
}

test($a) . "<br>";
test($b);

declare(strict_types=1); Esto hace que si no se pasa el tipo de dato que se espera da error (int $n1, int $n2)

function sumar(int $n1, int $n2): int | float esto es lo que se espera retornar
{
    ...
}

*/
