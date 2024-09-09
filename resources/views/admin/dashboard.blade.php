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
                        {{-- <img class="max-w-5xl mx-auto" src="https://www.geckoboard.com/uploads/Google-analytics4-dashboard.png" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
