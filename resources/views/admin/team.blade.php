<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div class="text-gray-900 col-span-1 md:col-span-1">
                        <x-nav-list/>
                    </div>
                    <div class="text-gray-900 col-span-1 md:col-span-4">
                        <x-chifre :countuser="$countuser" :countcontact="$countcontact"/>
                    <div class="py-8">
                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Team</h1>
                    
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border text-center">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="px-4 py-2 border-b">#</th>
                                        <th class="px-4 py-2 border-b">Utilisateur</th>
                                        <th class="px-4 py-2 border-b">Email</th>
                                        <th class="px-4 py-2 border-b">Phone</th>
                                        <th class="px-4 py-2 border-b">UserType</th>
                                        <th class="px-4 py-2 border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="px-4 py-2 border">{{ $user->id }}</td>
                                        <td class="px-4 py-2 border">{{ $user->name }}</td>
                                        <td class="px-4 py-2 border">{{ $user->email }}</td>
                                        <td class="px-4 py-2 border">{{ $user->phone }}</td>
                                        <td class="px-4 py-2 border">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->usertype == 'admin' ? 'bg-red-300' : 'bg-blue-200' }}">
                                                {{ $user->usertype }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2 border">
                                            <a href="#" id="open-modal-btn" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-700 text-gray-100">Modifier</a>
                                            <a href="#" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-700 text-gray-100">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

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
</x-app-layout>
