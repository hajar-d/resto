<div x-data="{ open: false }" class="bg-gray-900">
    <nav class="text-l p-3">
        <!-- Mobile Menu Button -->
        <div class="flex justify-between items-center md:hidden">
            <span class="text-gray-100 text-xl font-bold">Menu</span>
            <button @click="open = !open" class="text-gray-100 focus:outline-none">
                <i class="fas fa-bars w-6 h-6"></i>
            </button>
        </div>

        <!-- Menu -->
        <ul :class="{'block': open, 'hidden': !open}" class="mt-2 md:flex md:flex-col md:space-y-1 md:mt-0">
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fas fa-home w-6 h-6 text-gray-100"></i>
                <a href="{{ route('admin.dashboard') }}" class="text-gray-100 block px-4 py-2 text-sm">Dashboard</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fas fa-users w-6 h-6 text-gray-100"></i>
                <a href="{{ route('listTeam') }}" class="text-gray-100 block px-4 py-2 text-sm">Team</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fa fa-folder w-6 h-6 text-gray-100"></i>
                <a href="" class="text-gray-100 block px-4 py-2 text-sm">Projects</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fa fa-calendar w-6 h-6 text-gray-100"></i>
                <a href="" class="text-gray-100 block px-4 py-2 text-sm">Calendar</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fa fa-file w-6 h-6 text-gray-100"></i>
                <a href="" class="text-gray-100 block px-4 py-2 text-sm">Documents</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fa fa-chart-pie w-6 h-6 text-gray-100"></i>
                <a href="" class="text-gray-100 block px-4 py-2 text-sm">Reports</a>
            </li>
            <p class="text-gray-400 block px-4 py-2 text-sm">Your teams</p>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="heroicon-o-home w-6 h-6 text-gray-100"></i>
                <a href="{{ route('listPlat') }}" class="text-gray-100 block px-4 py-2 text-sm">Plats</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="heroicon-o-template w-6 h-6 text-gray-100"></i>
                <a href="{{ route('listCommande') }}" class="text-gray-100 block px-4 py-2 text-sm">Commands</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="heroicon-o-desktop-computer w-6 h-6 text-gray-100"></i>
                <a href="{{ route('listRes') }}" class="text-gray-100 block px-4 py-2 text-sm">Reservations</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="heroicon-o-desktop-computer w-6 h-6 text-gray-100"></i>
                <a href="{{ route('listUsers') }}" class="text-gray-100 block px-4 py-2 text-sm">Users</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="heroicon-o-desktop-computer w-6 h-6 text-gray-100"></i>
                <a href="{{ route('listContact') }}" class="text-gray-100 block px-4 py-2 text-sm">Messages</a>
            </li>
            <li class="hover:bg-gray-500 flex items-center rounded-md p-2">
                <i class="fa fa-cog w-6 h-6 text-gray-100"></i>
                <a href="" class="text-gray-100 block px-4 py-2 text-sm">Settings</a>
            </li>
        </ul>
    </nav>
</div>

<!-- Include Alpine.js for handling the toggle functionality -->
<script src="//unpkg.com/alpinejs" defer></script>
