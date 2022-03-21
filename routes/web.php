<?php

use App\Http\Controllers\AgentController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('agents')->group(function (){
    Route::get('/',[AgentController::class,'index'])->name('agents.index');
    Route::get('/create', [AgentController::class, 'create'])->name('agents.create');
    Route::post('/create', [AgentController::class, 'store'])->name('agents.store');
    Route::get('/delete/{id}', [AgentController::class, 'destroy'])->name('agents.destroy');
    Route::get('/edit/{id}', [AgentController::class, 'edit'])->name('agents.edit');
    Route::post('/update/{id}', [AgentController::class, 'update'])->name('agents.update');
});
