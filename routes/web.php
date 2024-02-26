<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

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

Route::get('/', [todoController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/create', function () {
    return view('create');
})->name('create');


Route::get('/edit', function(){
    return view('update');
});

//edit todo route
Route::get('/edit/{id}', [todoController::class, 'edit'])->name('edit');


// create todo route
Route::post('/create', [todoController::class, 'store'])->name('store');

//delete todo route
Route::get('/delete/{id}', [todoController::class, 'delete'])->name('delete');

//update data todo route
Route::post('update', [todoController::class, 'updateData'])->name('updateData');

