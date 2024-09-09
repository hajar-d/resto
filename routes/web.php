<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/menu',[PlatController::class,'index'])->name('menu');

Route::get('/listplats',[PlatController::class,'listPlat'])->name('listPlat');
Route::get('/listreservation',[ReservationController::class,'index'])->name('listRes');
Route::get('/listusers',[clientController::class,'index'])->name('listUsers');
Route::get('/listteam',[clientController::class,'listTeam'])->name('listTeam');
Route::get('/listcontact',[ContactController::class,'index'])->name('listContact');
// Route::get('/chifre',[clientController::class,'countUser'])->name('chifre');//route component

Route::get('/detailplat/{id}',[PlatController::class,'detailplat'])->name('detailplat');

Route::post('confirm-commande/{plat}', [CommandeController::class, 'store'])->name('confirm.commande');

Route::get('/panier', [CommandeController::class, 'panier'])->name('panier');
Route::view('/about','partials.about')->name('about');

Route::post('/contact', [ContactController::class, 'contact'])->name('contact.submit');
Route::get('/listCommande', [CommandeController::class, 'index'])->name('listCommande');

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour le profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Charger les routes d'authentification
require __DIR__.'/auth.php';

// Route pour le tableau de bord admin
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
