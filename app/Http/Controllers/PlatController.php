<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\plat;
use App\Models\contact;
use App\Models\User;
use App\Http\Requests\StoreplatRequest;
use App\Http\Requests\UpdateplatRequest;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plats= plat::all();
        return view('menu.index',compact('plats'));
    }
    public function listPlat()
    {
        $countuser= User::where('usertype', 'user')->count();
        $countcontact= contact::all()->count();
        $plats= plat::all();
        $plats=plat::paginate(6);
        return view('admin.plats',compact('plats','countuser','countcontact'));
    }


    public function detailplat($id){
        $plat= plat::findOrFail($id);
        return view('menu.detailPlat',compact('plat'));

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
    public function store(StoreplatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateplatRequest $request, plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plat $plat)
    {
        //
    }
}
