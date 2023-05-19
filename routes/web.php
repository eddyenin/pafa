<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $posts = Post::all();

    $i=0;
    $maxIter = 4;

    foreach($posts as $post){

       if($i < $maxIter){
            $forma[$i] = $post;
            $i++;

        }
    }
    return view('index',['posts' => $posts, 'forma' => $forma]);
})->name('home');

Route::resource('blog', PostController::class);
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
