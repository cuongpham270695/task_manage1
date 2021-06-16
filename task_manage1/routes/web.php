<?php

use App\Http\Controllers\TaskController;
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

Route::prefix('customer')->group(function (){
    Route::get('index', function (){
       return view('modules.customer.index');
    });
    Route::get('create', function(){

    });
    Route::post('store', function (){

    });
    Route::post('{id}/show', function (){

    });
    Route::get('{id}/edit', function(){

    });
    Route::patch('{id}/update', function (){

    });
    Route::delete('{id}',function (){

    });
});
Route::get('customers',[TaskController::class,'index'])->name('customers.index');
Route::get('customers/create',[TaskController::class,'create'])->name('customers.create');
Route::post('customers',[TaskController::class,'store'])->name('customers.store');
Route::get('customers/{id}',[TaskController::class,'show'])->name('customers.show');
Route::get('customers/{id}/edit',[TaskController::class,'edit'])->name('customers.edit');
Route::put('customers/{id}',[TaskController::class,'update'])->name('customers.update');
Route::delete('customers/{photo}',[TaskController::class,'destroy'])->name('customers.destroy');
