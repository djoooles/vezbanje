<?php

use App\Http\Controllers\ProfileController;
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


Route::middleware('auth')->prefix('admin')->group(function (){

    Route::post("/send-contact", [ContactController::class, "sendContact"]);

    Route::post("/add-user-grade", [OceneController::class, "addGrade"]);

    Route::get("/delete-product/{product}", [ProductsController::class, "delete"])
        ->name("obrisiProizvod");

    Route::get("/delete-contact/{contact}", [ContactController::class, "delete"])
        ->name("obrisiContact");

    Route::post("/save-product", [ProductsController::class, "saveProduct"])
        ->name("snimanjeOglasa");

    Route::get("/all-products", [ProductsController::class, "products"])
        ->name("sviProizvodi");

    Route::get("/allContacts", [ContactController::class, "getAllContacts"]);

    Route::get("/add-product", function (){
        return view("addProduct");
    });
    Route::get("/product/edit/{product}", [ProductsController::class, "singleProduct"])
        ->name("product.single");

    Route::post("/proudct/save/{product}", [ProductsController::class, "save"])
        ->name("product.save");
} );



require __DIR__.'/auth.php';
