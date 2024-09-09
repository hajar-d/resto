<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\User;
use App\Models\Plat;
use App\Models\Contact;
use App\Models\Reservation;
use App\Models\DetailCommande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorecommandeRequest;
use App\Http\Requests\UpdatecommandeRequest;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{   
    $countuser = User::where('usertype', 'user')->count();
    $commandes = Commande::paginate(10); // Use either paginate or all
    $countcontact = Contact::count(); // Avoid unnecessary all() call
    return view('admin.commande', compact('commandes', 'countuser', 'countcontact'));
}

//     public function countCom()
// {
//     $commandCount = 0;

//     // Check if user is authenticated
//     if (Auth::check()) {
//         // Get the number of commands for the authenticated user
//         $commandCount = Commande::where('user_id', Auth::id())->count();
//     }

//     // Pass the count to the view
//     return view('welcome', compact('commandCount')); // Adjust 'home' to your actual view name
// }


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
    public function store(Request $request, $id)
{
    // Check if the user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'You need to be logged in to place an order.');
    }

    // Validate the request data
    $validatedData = $request->validate([
        'date_reservation' => 'required|date',
        'num_persons' => 'required|integer|min:1',
        'time_slot' => 'required|in:morning,afternoon,evening',
    ]);

    DB::beginTransaction();

    try {
        // Retrieve the plat and its price
        $plat = Plat::findOrFail($id);
        $platPrice = $plat->price;

        // Calculate the total price
        $quantity = $validatedData['num_persons'];
        $total = $platPrice * $quantity;

        // Create a new commande
        $commande = new Commande();
        $commande->user_id = Auth::id();
        $commande->status = 'pending'; 
        $commande->quantity = $quantity;
        $commande->date_com = $validatedData['date_reservation'];
        $commande->time_com = $validatedData['time_slot'];
        $commande->save();

        // Create a detail for the commande
        $detailCommande = new DetailCommande();
        $detailCommande->commande_id = $commande->id;
        $detailCommande->plats_id = $id;
        $detailCommande->total = $total;
        $detailCommande->save();

        DB::commit();

        // Redirect the user back with a success message
        return redirect()->back()->with('success', 'Commande added successfully!');

    } catch (\Exception $e) {
        DB::rollBack();
        // Optionally log the exception or handle it
        return redirect()->back()->with('error', 'An error occurred while placing the order.');
    }
}

public function panier()
{
    // Ensure the user is authenticated
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Fetch the authenticated user
    $user = auth()->user();

    // Fetch commandes with related detailCommandes and plats
    $commandes = $user->commandes()->with('detailCommandes.plat')->get();

    // Debugging: Check if commandes are fetched correctly
    // dd($commandes);  // Remove this after debugging

    $reservations = $user->reservations;

    // Calculate total prices
    foreach ($commandes as $commande) {
        foreach ($commande->detailCommandes as $detail) {
            $detail->price = $detail->plat ? $detail->plat->price : 0; // Fetch the price from plat
            $detail->total_price = $detail->price * $detail->quantity; // Calculate total price
        }
        $commande->total_price = $commande->detailCommandes->sum('total_price'); // Sum total prices
    }

    return view('partials.panier', compact('commandes', 'reservations'));
}


    /**
     * Display the specified resource.
     */
    public function show(commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommandeRequest $request, commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commande $commande)
    {
        //
    }
}
