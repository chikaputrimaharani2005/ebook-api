<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route:: get('halo',function(){
//     return ["me" => "Cangtip"];
// });

Route::get('siswa',[SiswaController::class, 'index']);
Route::get('siswa/{id}', [SiswaController::class, 'show']);
Route::post('siswa', [SiswaController::class, 'store']);
Route::post('siswa/{id}',[SiswaController::class, 'update']);
Route::delete('siswa/{id}', [SiswaController::class, 'destroy']);

Route :: resource ('siswa',Siswacontroller::class);