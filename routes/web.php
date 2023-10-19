<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

    //var_dump($post);
    // foreach($post as $p){
    //     if(isset($p->categories)){
    //         echo "<pre>"; print_r($p->categories);
    //     }




    // }
    //var_dump($post->blogImages);die;
    // $i=0;
    // $maxiteration = 5;

    // foreach($post as $p){
    //     if($i<$maxiteration){
    //        $arr[$i] = $p;
    //        $i++;
    //     }else{
    //         break;
    //     }
    // }

    // var_dump($p->blogImages);die;

    return view('index', ['post'=> Post::all()]);
})->name('pafa');

Route::resource('/blog', PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category',[CategoryController::class,'store'])->name('category.store');
});



require __DIR__.'/auth.php';
