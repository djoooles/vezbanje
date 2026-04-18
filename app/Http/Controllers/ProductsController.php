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
            "name" => "required|string|max:255|unique:products",
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
        return redirect()->route("sviProizvodi");
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
    public function singleProduct(Request $request, $id)
    {
        $product = Products::where(['id' => $id])->first();

        if( $product === null)
        {
            die("Ovaj Proizvod ne Postoji");
        }
        return view("products.edit", compact("product"));
    }

    public function save(Request $request, $id)
    {
        $product = Products::where(['id' => $id])->first();
        if( $product === null)
        {
            die("Ovaj Proizvod ne Postoji");
        }

        $product->name = $request->get("name");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->kolicina = $request->get("kolicina");
        $product->image = $request->get("image");

        $product->save();

        return redirect()->back();

    }
}
