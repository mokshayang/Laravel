<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HotelController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
// Route::resources([
//     'students' => StudentController::class,
//     'bikes' => BikeController::class,
// ]); 
Route::resource('student', StudentController::class);
Route::get('student_excel', [StudentController::class, 'excel'])->name('excel');
Route::get('student_child', [StudentController::class, 'childPage'])->name('childPage');
Route::get('student_layout', [StudentController::class, 'layout'])->name('layput_p1');


Route::get('f1', [HotelController::class, 'f1'])->name('hotels.1');
Route::get('f2', [HotelController::class, 'f2'])->name('hotels.2');
Route::get('f3', [HotelController::class, 'f3'])->name('hotels.3');
Route::resource('Hotel', HotelController::class);

