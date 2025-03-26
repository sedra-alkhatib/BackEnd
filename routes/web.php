<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PythonController;

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
    return view('welcome');
});
// routes/web.php



Route::get('/run-python', [PythonController::class, 'runPythonScript']);
Route::get('/run-python', [PythonController::class, 'runPythonScript']);