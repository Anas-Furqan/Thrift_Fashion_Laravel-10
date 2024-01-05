<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [MainController::class, "index"]);
Route::get("/about", [MainController::class, "about"]);
Route::get("/checkout", [MainController::class, "checkout"]);
Route::get("/contactPage", [MainController::class, "contactPage"]);
Route::get("/productPage", [MainController::class, "productPage"]);
Route::get("/productPage2", [MainController::class, "productPage2"]);
Route::get("/productPage3", [MainController::class, "productPage3"]);
