<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OceneController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;

Route::get('/welcome', [OceneController::class, 'index']);

Route::get("/contact", [ContactController::class, "index"]);

Route::view("/about", "about");
Route::get("/shop", [ProductsController::class, "index"]);

Route::view("/dodaj-ocenu", "gradeAdd");

Route::get("/", [OceneController::class, 'index']);

Route::post("/send-contact", [ContactController::class, "sendContact"]);

Route::get("/admin/all-products", [ProductsController::class, "products"]);
Route::post("/add-user-grade", [OceneController::class, "addGrade"]);
Route::get("/admin/delete-product/{product}", [ProductsController::class, "delete"]);
Route::get("/admin/delete-contact/{contact}", [ContactController::class, "delete"]);
Route::get("/allContacts", [ContactController::class, "getAllContacts"]);

Route::get("/admin/add-product" , function (){
    return view("addProduct");
});

Route::post("/admin/save-product", [ProductsController::class, "saveProduct"]);
