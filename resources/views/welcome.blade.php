<!-- resources/views/welcome.blade.php -->

@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('main')

<!-- Display Success Message -->
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

<div class="relative overflow-hidden bg-white mt-14">
    <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
        <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
                <h1 class="text-4xl font-bold tracking-tight text-gray-500 sm:text-6xl">
                    Bienvenue chez notre restaurant !!
                </h1>
                <p class="mt-4 text-xl text-gray-500">
                    Découvrez notre cuisine exquise et nos saveurs uniques.
                </p>
            </div>
            <div>
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                    <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                        <div class="flex items-center space-x-6 lg:space-x-8">
                            <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                    <img src="https://media.istockphoto.com/id/104704117/photo/restaurant-plates.jpg?s=612x612&w=0&k=20&c=MhFdN_qVgzoHov-kgFx0qWSW0nZht4lZV1zinC3Ea44=" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="https://howtostartanllc.com/images/business-ideas/business-idea-images/fast-food.jpg" alt="" class="h-full w-full object-cover object-center">
                                </div>
                            </div>
                            <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/15/9e/05/d1/grilled-prawn.jpg" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="https://idealsoftware.co.za/wp-content/uploads/2016/03/Hotel-restaurant-2-768x461.jpg" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="https://qul.imgix.net/77d352f7-c75c-401e-8dd6-f5295ab9b752/677553_sld.jpg" alt="" class="h-full w-full object-cover object-center">
                                </div>
                            </div>
                            <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="https://villatajmarrakech.com/wp-content/uploads/2022/04/tajine-avec-du-couscous-marocain.jpg" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="h-64 w-44 overflow-hidden rounded-lg">
                                    <img src="https://www.deputy.com/uploads/2018/10/The-Most-Popular-Menu-Items-That-You-should-Consider-Adding-to-Your-Restaurant_Content-image1-min-1024x569.png" alt="" class="h-full w-full object-cover object-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="open-modal-btn" class="inline-block rounded-md border border-transparent bg-orange-500 px-8 py-3 text-center font-medium text-white hover:bg-orange-600 mt-10">Réservez dès maintenant votre table !</button>

                <!-- Modal -->
                <div id="modal-wrapper" class="fixed z-10 inset-0 hidden">
                    <div class="flex items-center justify-center min-h-screen bg-gray-500 bg-opacity-75 transition-all">
                        <!-- Modal Box -->
                        <div class="flex flex-col items-center justify-between bg-white p-10 rounded w-2/3">
                            <h3 class="text-2xl uppercase font-medium tracking-wider">Make a Reservation</h3>

                            <!-- Reservation Form -->
                            <form action="{{ route('reservations.store') }}" method="POST" class="mt-8 w-full">
                                @csrf
                                <!-- Date Picker -->
                                <div class="mb-4">
                                    <label for="date_reservation" class="block text-gray-700">Select Date:</label>
                                    <input type="date" id="date_reservation" name="date_reservation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50">
                                </div>

                                <!-- Number of Persons -->
                                <div class="mb-4">
                                    <label for="num_persons" class="block text-gray-700">Number of Persons:</label>
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
                                <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Confirm Reservation</button>
                            </form>

                            <!-- Close Button -->
                            <button id="close-modal-btn" class="bg-gray-500 text-white py-3 px-10 rounded mt-5">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<section class="Map-responsive">
    <h1 class="mt-10">THE TABLE Location Map</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55056.00021372861!2d-9.643129347332694!3d30.407741500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b711d0e092c9%3A0x6cdf82cc46bf2e29!2sRestaurant%20La%20Grande%20Table%20D&#39;Agadir!5e0!3m2!1sfr!2sma!4v1717162570436!5m2!1sfr!2sma" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1720.147071444242!2d-9.599527305423832!3d30.427762499999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b79353cfee9f%3A0x555594a8b0dd5ccf!2sZONE%2011!5e0!3m2!1sfr!2sma!4v1715154981309!5m2!1sfr!2sma" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
</section>
<i want to add code in this partie>

<!-- JavaScript to toggle modal visibility -->
<script>
    // Add event listener to open modal button
    document.getElementById("open-modal-btn").addEventListener("click", () => {
        document.getElementById("modal-wrapper").classList.remove("hidden");
    });

    // Add event listener to close modal button
    document.getElementById("close-modal-btn").addEventListener("click", () => {
        document.getElementById("modal-wrapper").classList.add("hidden");
    });
</script>
@endsection
