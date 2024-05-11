<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/prueba', function(){
    /*
    Create a new register in the post table

    $post = new Post;

    $post->title = 'Titulo de prueba 2';
    $post->content = 'Contenido de prueba 2';
    $post->category = 'Categoria de prueba 2';

    $post->save();

    return $post;
    */

    /*
    Find a register with the id '1'
    $post = Post::find(1);
    return $post;
    */
    $post = Post::find(4);
    return $post;
    /*
    Find the first register with the value 'Titulo de prueba 2' in the column 'title'
    $post = Post::where('title', 'Titulo de prueba 2')->first();
    return $post;
    */
    
    /*
    Modify a register
    $post = Post::where('title', 'Titulo de prueba 2')->first();
    $post->category = 'Desarrollo web';
    $post->save();

    return $post;
    */
    
    /*
    Get all registers
    $post = Post::all();

    return $post;

    $post = Post::get();

    return $post;
    */
    
    /*
    Get the register with the id are greater than 2
    $post = Post::where('id', '>=', '2')->get();

    return $post;
    */

    /*
    $post = Post::orderby('id', 'desc')->get();
    return $post;

    $post = Post::orderby('id', 'desc')
        ->select('id', 'title', 'category')
        ->take(2)
        ->get();
    return $post;
    */
    
    /*
    Delete a register
    $post = Post::find('1');
    $post->delete();

    return "Deleted correctly";
    */

    /*
    
    */

    /*
    
    */

});

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
