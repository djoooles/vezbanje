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

Route::post("/add-user-grade", [OceneController::class, "addGrade"]);


                   /*Named route ADMIN {*/
Route::get("/admin/delete-product/{product}", [ProductsController::class, "delete"])
    ->name("obrisiProizvod");

Route::get("/admin/delete-contact/{contact}", [ContactController::class, "delete"])
    ->name("obrisiContact");

Route::post("/admin/save-product", [ProductsController::class, "saveProduct"])
    ->name("snimanjeOglasa");

Route::get("/admin/all-products", [ProductsController::class, "products"])
    ->name("sviProizvodi");

Route::get("/allContacts", [ContactController::class, "getAllContacts"]);

Route::get("/admin/add-product" , function (){
    return view("addProduct");
});
Route::get("admin/product/edit/{id}", [ProductsController::class, "singleProduct"])
    ->name("product.single");

Route::post("/admin/proudct/save/{id}", [ProductsController::class, "save"])
    ->name("product.save");
