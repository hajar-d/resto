<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
            <div class="flex h-16 items-center">
                <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <div class="ml-4 flex lg:ml-0">
                    <a href="/">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/1/11/The_Table_%28restaurant%29_logo.png" alt=""/>
                    </a>
                </div>

                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                    <div class="flex h-full space-x-8">
                        <a href="{{ route('home') }}" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Home</a>
                        <a href="{{ route('menu') }}" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Menu</a>
                        <a href="{{ route('about') }}" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">About</a>
                        <button id="open-modal-btn-contact" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Contact Us</button>
                    </div>
                </div>

                <!-- Modal -->
                <div id="modal-contact" class="fixed z-10 inset-0 hidden">
                    @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.36 5.652a.5.5 0 0 0-.708.708L9.293 10l-3.64 3.641a.5.5 0 0 0 .708.707L10 10.707l3.641 3.64a.5.5 0 0 0 .707-.707L10.707 10l3.641-3.648a.5.5 0 0 0 0-.7l.001-.002z"/></svg>
                    </span>
                    </div>
                    {{-- <script>
                        setTimeout(function() {
                            window.history.back();
                        }, {{ session('redirectAfter') * 1000 }});
                    </script> --}}
                    @endif
                    <div class="flex items-center justify-center min-h-screen bg-gray-500 bg-opacity-75 transition-all">
                        <!-- Modal Box -->
                        <div class="flex flex-col items-center justify-between bg-white p-10 rounded w-2/3">
                            <h3 class="text-2xl uppercase font-medium tracking-wider">Contactez-nous</h3>

                            <!-- Reservation Form -->
                            <form action="{{ route('contact.submit') }}" method="POST" class="mt-8 w-full">
                                @csrf
                                <!-- Date Picker -->
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700">Email:</label>
                                    <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50">
                                </div>

                                <!-- Number of Persons -->
                                <div class="mb-4">
                                    <label for="phone" class="block text-gray-700">Téléphone:</label>
                                    <input type="text" id="phone" name="phone" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50">
                                </div>

                                <!-- message -->
                                <div class="mb-4">
                                    <label for="message" class="block text-gray-700">Message:</label>
                                    <textarea id="message" name="message" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 h-44 p-2"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Envoyer</button>
                            </form>

                            <!-- Close Button -->
                            <button id="close-modal-btn-contact" class="bg-gray-500 text-white py-3 px-10 rounded mt-5">Close</button>
                        </div>
                    </div>
                </div>

                <div class="ml-auto flex items-center">
                    @if(Auth::check())
                        <!-- User is authenticated -->
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">{{ Auth::user()->name }}</a>
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Profile</a>
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800" 
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </div>
                    @else
                        <!-- User is not authenticated -->
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Login</a>
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <a href="{{ route('register') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                        </div>
                    @endif

                    <div class="hidden lg:ml-8 lg:flex">
                        <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                            <img src="https://cdn-icons-png.flaticon.com/128/940/940243.png" alt="" class="block h-auto w-5 flex-shrink-0"/>
                            <span class="ml-3 block text-sm font-medium">MAD</span>
                            <span class="sr-only">, change currency</span>
                        </a>
                    </div>

                    <div class="flex lg:ml-6">
                        <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Search</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </a>
                    </div>

                    <div class="ml-4 flow-root lg:ml-6">
                        <a href="{{ route('panier') }}" class="group -m-2 flex items-center p-2">
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">{{ $commandCount }}</span>
                            <span class="sr-only">items in cart, view bag</span>
                        </a>
                    </div>

                    <!-- Settings Dropdown for authenticated users -->
                    @if(Auth::check())
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            @if(Auth::check())
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </nav>

    <!-- JavaScript to toggle modal visibility -->
<script>
    // Add event listener to open modal button
    document.getElementById("open-modal-btn-contact").addEventListener("click", () => {
        document.getElementById("modal-contact").classList.remove("hidden");
    });

    // Add event listener to close modal button
    document.getElementById("close-modal-btn-contact").addEventListener("click", () => {
        document.getElementById("modal-contact").classList.add("hidden");
    });
</script>
</body>
</html>
