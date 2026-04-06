<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OceneController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;

Route::get('/welcome', [OceneController::class, 'index']);

Route::get("/contact", [ContactController::class, "index"]);

Route::view("/about", "about");

Route::view("/dodaj-ocenu", "gradeAdd");

Route::get("/", [OceneController::class, 'index']);

Route::post("/send-contact", [ContactController::class, "getAllContacts"]);

Route::get("/admin/all-products", [ProductsController::class, "index"]);
Route::post("/add-user-grade", [OceneController::class, "addGrade"]);
Route::get("/admin/delete-product/{product}", [ProductsController::class, "delete"]);
Route::get("/allContacts", [ContactController::class, "getAllContacts"]);
