<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countuser= User::where('usertype', 'user')->count();
        $countcontact= contact::all()->count();
        $users= User::all();
        return view('admin.users',compact('users','countuser','countcontact'));
    }

    public function listTeam(){
        $users= User::all();
        $countuser= User::where('usertype', 'user')->count();
        $countcontact= contact::all()->count();
        return view('admin.team',compact('countuser','users','countcontact'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
