<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;




class ProductsController extends Controller
{
    public function index()
    {
        $allProducts = Products::all();
        return view("shop", compact("allProducts"));
    }

    public function products()
    {
        $allProducts = Products::all();
        return view("allProducts", compact("allProducts"));
    }

    public function saveProduct(Request $request)
    {
        // Validacija
        $request->validate([
            "name" => "required|string|max:255",
            "description" => "required|string",
            "price" => "required|numeric|min:0",
            "kolicina" => "required|integer|min:0",
            "image" => "required|string|max:255",
        ]);

        // Kreiranje proizvoda
        Products::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "kolicina" => $request->kolicina,
            "image" => $request->image,
        ]);
        return redirect("/admin/all-products")->with('success', 'Proizvod Uspesno Dodat!');
    }
    public function delete($product)
    {
        $singleProduct = Products::where(['id' => $product])->first();

        if( $singleProduct === null)
        {
            die("Ovaj proizvod ne postoji");
        }
        $singleProduct->delete();

        return redirect()->back();
    }

}
