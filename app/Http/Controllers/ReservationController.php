<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\reservation;
use App\Models\User;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countuser= User::where('usertype', 'user')->count();
        $countcontact= contact::all()->count();
        $reservations= Reservation::all();
        return view('admin.reservation',compact('reservations','countuser','countcontact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Vérifier si l'utilisateur est authentifié
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Vous devez être connecté pour faire une réservation.');
    }

    // Valider les données de la requête
    $validatedData = $request->validate([
        'date_reservation' => 'required|date',
        'num_persons' => 'required|integer',
        'time_slot' => 'required|string',
    ]);

    // Créer la réservation avec l'ID de l'utilisateur authentifié
    $reservation = Reservation::create([
        'user_id' => Auth::id(),  // Obtenir l'ID de l'utilisateur authentifié
        'status' => 'disponible',
        'nombr_pers' => $validatedData['num_persons'],
        'date_res' => $validatedData['date_reservation'],
        'time_res' => $validatedData['time_slot'],
    ]);

    return redirect()->back()->with('success', 'Réservation effectuée avec succès!');
}

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereservationRequest $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
