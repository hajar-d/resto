@extends('layouts.master')

@section('title', 'Panier')

@section('main')
<div class="container mx-auto w-5/6 mt-16">
    <div class="py-8">
        <!-- Header -->
        <div class="flex items-center mb-6">
            <h1 class="text-3xl font-semibold text-gray-800 mr-4">Shopping Cart</h1>
            <img src="https://cdn.icon-icons.com/icons2/2850/PNG/512/shopping_cart_market_ecommerce_shop_icon_181465.png" alt="panier" class="w-14 h-14 object-cover rounded-lg">
        </div>

        <!-- Empty Cart Message -->
        @if ($commandes->isEmpty() && $reservations->isEmpty())
            <div class="container mx-auto p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-white p-6 rounded-lg shadow-md">
                    <div class="text-center md:text-left">
                        <p class="text-2xl text-gray-700 mb-4">Your basket is empty.</p>
                        <a href="{{ route('menu') }}" class="inline-block rounded-md border border-transparent bg-orange-600 px-8 py-3 text-center font-medium text-white hover:bg-orange-700">Order Your Dishes!</a>
                    </div>
                    <div class="flex justify-center md:justify-end">
                        <img src="https://shop.ecotelannecy.fr/pub/catalogue/320/320413_2.jpg" alt="panier" class="w-72 h-72 object-cover rounded-lg">
                    </div>
                </div>
            </div>
        @else
            <!-- Display Commandes -->
            @if (!$commandes->isEmpty())
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Commandes</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($commandes as $commande)
                    @foreach ($commande->detailCommandes as $detail)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $commande->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $commande->date_com }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $commande->time_com }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $detail->quantity }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($commande->status == 'pending')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        En attente
                                    </span>
                                @elseif ($commande->status == 'confirmed')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Confirmé
                                    </span>
                                @elseif ($commande->status == 'canceled')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Annulé
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $detail->price ?? 'N/A' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $detail->total_price ?? 'N/A' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-700 text-gray-100">Cancel</button>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@endif

            <!-- Display Reservations -->
            @if (!$reservations->isEmpty())
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Réservations</h2>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre Persone</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($reservations as $res)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $res->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $res->date_res }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $res->time_res }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $res->nombr_pers }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($res->status == 'En attente')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                En attente
                                            </span>
                                        @elseif ($res->status == 'disponible')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Disponible
                                            </span>
                                        @elseif ($res->status == 'annule')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Annulé
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"><button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-700 text-gray-100">Cancel</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection
