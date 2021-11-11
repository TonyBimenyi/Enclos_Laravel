<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ListStudentController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\ErrorUserController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\list_depenseController;
use App\Http\Controllers\List_TeacherController;
use App\Http\Controllers\ListRevenuController;
use App\Http\Controllers\RevenuController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Type_DepenseController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\Type_RevenuController;
use App\Http\Controllers\UsersController;

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
Route::resource('/', AccueilController::class);
Route::resource('/student', StudentController::class);
Route::resource('/list_student', ListStudentController::class);
Route::resource('/teacher', TeacherController::class);
Route::resource('/list_teacher', List_TeacherController::class);
Route::resource('/depense', DepenseController::class);
Route::resource('/types_depense', Type_DepenseController::class);
Route::resource('/list_depense', list_depenseController::class);
Route::resource('/revenu', RevenuController::class);
Route::resource('/types_revenu', Type_RevenuController::class);
Route::resource('/list_revenu', ListRevenuController::class);
Route::get('/search','App\Http\Controllers\ListRevenuController@search');
Route::get('/searchDepense','App\Http\Controllers\list_depenseController@searchDepense');
Route::resource('/stat', StatController::class);
Route::resource('/fees', FeesController::class);
Route::resource('/users',UsersController::class);
Route::resource('/auth',RegisterController::class);
Route::resource('/CreateUserError',ErrorUserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [SelectController::class, 'creat'])->name('select') ;
