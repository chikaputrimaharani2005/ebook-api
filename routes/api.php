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
 //public route
 Route::post('/register',[AuthController::class,'register']);
 Route::post('/login',[AuthController::class,'login']);
 
 Route::get('/books',[BookController::class,'index']);
 Route::get('/Books/{id}',[BooksController::class,'show']);
 Route::get('/Authors',[AuthorController::class,'index']);
 Route::get('/Authors/{id}',[AuthorController::class,'show']);

 //protected routes
 Route::middleware('auth:sanctum')->group(function(){
      Route::resource('/books', BookController::class)->except('create','edit','show','index');
      Route::post('/logout',[AuthController::class,'logout']);
      Route::resource('authors', AuthorController::class)->except('create','edit','show','index');
});