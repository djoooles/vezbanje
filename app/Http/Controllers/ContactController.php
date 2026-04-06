<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        return view('/contact');
    }
    public function getAllContacts()
    {
        $allContacts = Contact::all();

        return view("allContacts", compact('allContacts'));
    }
    public function sendContact(Request $request)
    {
        $request->validate([
            "email" => "required|email|string",
            "subject" => "required|string",
            "description" => "required|string|min:5|max:255"
        ]);

        Contact::create([
            "email" => $request->get("email"),
            "subject" => $request->get("subject"),
            "message" => $request->get("description")
        ]);

        return redirect("/")->with('success', 'Upit Uspesno Poslat!');
    }
    public function delete($contact)
    {
        $singleContact = Contact::where(['id' => $contact])->first();

        if($singleContact === null)
        {
            die("Nema Contacta tog!");
        }
        $singleContact->delete();

        return redirect()->back();
    }
}
