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
                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">List of Message</h1>
                    
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border text-center">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="px-4 py-2 border-b">#</th>
                                        <th class="px-4 py-2 border-b">Utilisateur</th>
                                        <th class="px-4 py-2 border-b">Email</th>
                                        <th class="px-4 py-2 border-b">Phone</th>
                                        <th class="px-4 py-2 border-b">Message</th>
                                        <th class="px-4 py-2 border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="px-4 py-2 border">{{ $contact->id }}</td>
                                        <td class="px-4 py-2 border">{{ $contact->user ? $contact->user->name : 'N/A' }}</td>
                                        <td class="px-4 py-2 border">{{ $contact->email }}</td>
                                        <td class="px-4 py-2 border">{{ $contact->phone }}</td>
                                        <td class="px-4 py-2 border">{{ $contact->message }}</td>
                                        <td class="px-4 py-2 border">
                                            <a href="#" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-700 text-gray-100">Modifier</a>
                                            <a href="#" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-700 text-gray-100">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
