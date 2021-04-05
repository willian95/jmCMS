<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\FileController;

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
})->name("login")->middleware("guest");

Route::post("login", [AuthController::class, "login"]);
Route::get("logout", [AuthController::class, "logout"])->name("logout");

Route::get("/home", function(){

    return view("dashboard");

})->name("home")->middleware("auth");

Route::post("/ckeditor/upload", [CKEditorController::class, "upload"])->name("ckeditor.upload");

Route::get("/countries/all", [CountryController::class, "all"]);

Route::view("vacancies", "vacancy.list");
Route::view("vacancies/create", "vacancy.create");
Route::get("vacancies/edit/{id}", [VacancyController::class, "edit"]);
Route::get("vacancies/fetch/{id}", [VacancyController::class, "fetch"]);
Route::post("vacancies/store", [VacancyController::class, "store"]);
Route::post("vacancies/update", [VacancyController::class, "update"]);
Route::post("vacancies/delete", [VacancyController::class, "delete"]);

Route::view("resources", "resources.index");
Route::post("resources-file/store", [ResourcesController::class, "store"]);
Route::get("resources/fetch/{page}", [ResourcesController::class, "fetch"]);
Route::post("resources/delete", [ResourcesController::class, "delete"]);

Route::post("/upload/file", [FileController::class, "upload"]);