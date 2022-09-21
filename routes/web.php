<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/tentang-kami', [HomeController::class,'about'])->name('about');
Route::get('/layanan', [HomeController::class,'contact'])->name('contact');
Route::get('/harga', [HomeController::class,'pricing'])->name('pricing');
Route::get('/work1', [HomeController::class,'worksingle'])->name('worksingle');
Route::get('/work2', [HomeController::class,'work'])->name('work');

// // untuk mengeluarkan list data
// Route::get('/student', [StudentController::class, 'index']);
// // untuk mengeluarkan form view insert
// Route::get('/student/create', [StudentController::class, 'create']);
// // untuk mengeluarkan form view update
// Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
// // untuk menyimpan
// Route::post('/student', [StudentController::class, 'store']);
// // untuk edit
// Route::put('/student/{id}', [StudentController::class, 'update']);
// // untuk delete
// Route::delete('/student/{id}', [StudentController::class, 'destroy']);

Route::resource('student', StudentController::class);
