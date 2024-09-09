@extends('layouts.master')

@section('title', 'Product Details')

@section('main')
<div class="container mx-auto mt-8">
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.36 5.652a.5.5 0 0 0-.708.708L9.293 10l-3.64 3.641a.5.5 0 0 0 .708.707L10 10.707l3.641 3.64a.5.5 0 0 0 .707-.707L10.707 10l3.641-3.648a.5.5 0 0 0 0-.7l.001-.002z"/></svg>
            </span>
        </div>
    @endif

<div class="bg-gray-100 py-8">
    <div class="container mx-auto">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ $plat->image }}" alt="{{ $plat->name }}" class="w-full h-auto">
            <div class="p-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $plat->name }}</h2>
                <p class="text-gray-700">{{ $plat->description }}</p>
                <p class="text-gray-900 text-xl font-semibold mt-4">${{ $plat->price }}</p>
                
                <!-- Add to Cart Button -->
                <div class="mt-8 flex justify-end">
                    <button id="open" class="bg-orange-500 text-white py-2 px-4 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Add Commande</button>
                </div>


                <div id="modal" class="fixed z-10 inset-0 hidden">
                    <div class="flex items-center justify-center min-h-screen bg-gray-500 bg-opacity-75 transition-all">
                        <!-- Modal Box -->
                        <div class="flex flex-col items-center justify-between bg-white p-10 rounded w-2/3">
                            <h3 class="text-2xl uppercase font-medium tracking-wider">Make a Commande</h3>

                            <!-- Reservation Form -->
                            <form action="{{ route('confirm.commande', ['plat' => $plat->id]) }}" method="POST" class="mt-8 w-full">
                                @csrf
                                <!-- Date Picker -->
                                <div class="mb-4">
                                    <label for="date_reservation" class="block text-gray-700">Select Date:</label>
                                    <input type="date" id="date_reservation" name="date_reservation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50">
                                </div>

                                <!-- Number of Persons -->
                                <div class="mb-4">
                                    <label for="num_persons" class="block text-gray-700">Quantity:</label>
                                    <input type="number" id="num_persons" name="num_persons" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50">
                                </div>

                                <!-- Time Slot -->
                                <div class="mb-4">
                                    <label for="time_slot" class="block text-gray-700">Select Time Slot:</label>
                                    <select id="time_slot" name="time_slot" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50">
                                        <option value="morning">Morning (9:00 AM - 12:00 PM)</option>
                                        <option value="afternoon">Afternoon (1:00 PM - 5:00 PM)</option>
                                        <option value="evening">Evening (6:00 PM - 10:00 PM)</option>
                                    </select>
                                </div>
                                

                                <!-- Submit Button -->
                                <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Confirm Commande</button>
                            </form>

                            <!-- Close Button -->
                            <button id="close" class="bg-gray-500 text-white py-3 px-10 rounded mt-5">Close</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>



<script>
    // Add event listener to open modal button
    document.getElementById("open").addEventListener("click", () => {
        document.getElementById("modal").classList.remove("hidden");
    });

    // Add event listener to close modal button
    document.getElementById("close").addEventListener("click", () => {
        document.getElementById("modal").classList.add("hidden");
    });
</script>


@endsection
