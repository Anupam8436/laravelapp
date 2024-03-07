<?php


use App\Http\Controllers\AddressController;
use App\Http\Controllers\formController;
use App\Http\Controllers\tableController;
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

Route::get("/", [tableController::class,"productView"])->name("productView");
Route::post("/table", [tableController::class,"finalView"])->name("FinalView");
Route::get("/table/delete/{id}", [tableController::class,"DeleteData"])->name("DeleteData");
Route::get("/table/edit/{id}", [tableController::class,"EditView"])->name("EditView");
Route::post("/table/update/{id}", [tableController::class,"TableUpdate"])->name("TableUpdate");


Route::get("/form", [formController::class,"fileView"])->name("FileView");
Route::post("/save", [formController::class,"registrationView"])->name("RegistrationView");
Route::get("/user/delete/{id}", [formController::class,"deleteView"])->name("DeleteView");
Route::get("/user/edit/{id}", [formController::class,"EditUser"])->name("EditUser");
Route::post("/user/update/{id}", [formController::class,"UpdateUser"])->name("UpdateUser");


Route::get("/add", [AddressController::class,"Location"])->name("Location");
Route::post("/done", [AddressController::class,"place"])->name("place");
Route::get("/add/delete/{id}", [AddressController::class,"DeleteData"])->name("DeleteData");
Route::get("/add/edit/{id}", [AddressController::class,"EditData"])->name("EditData");
Route::post("/add/update/{id}", [AddressController::class,"UpdateData"])->name("UpdateData");


