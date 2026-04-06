<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocene;

class OceneController extends Controller
{

    public function index()
    {
        $ocena = Ocene::all();
        return view("welcome", compact("ocena"));
    }
    public function addGrade(Request $request)
    {
        $request->validate([
            'profesor' => 'string|required|min:4',
            'predmet' => 'string|required|min:4',
            'ocena' => 'integer|required|min_digits:1|max_digits:5'
        ]);

        Ocene::create([
            "profesor" => $request->profesor,
            "predmet" => $request->predmet,
            "ocena" => $request->ocena
        ]);

        return redirect("/");
    }

}
