<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produsts;




class ProductsController extends Controller
{
    public function index()
    {
        $allProducts = Produsts::all();
        return view("allProducts", compact("allProducts"));
    }
    public function delete($product)
    {
        $singleProduct = Produsts::where(['id' => $product])->first();

        if( $singleProduct == null)
        {
            die("Ovaj proizvod ne postoji");
        }
        $singleProduct->delete();

        return redirect()->back();
    }
}
