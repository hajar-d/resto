<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=contact::all();
        $countuser= User::where('usertype','user')->count();
        $countcontact= contact::all()->count();
        return view('admin.contact',compact('contacts','countcontact','countuser'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact(Request $request)
    {
        // Validation
        $validateData = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Traitement du formulaire, par exemple envoi d'un email ou enregistrement en base de données
        $contact = Contact::create([
            'user_id' => Auth::id(),  // Get the ID of the authenticated user
            'email' => $validateData['email'],
            'phone' => $validateData['phone'],
            'message' => $validateData['message'],
        ]);
            // return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !')->with('redirectAfter', 5);
            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontactRequest $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
