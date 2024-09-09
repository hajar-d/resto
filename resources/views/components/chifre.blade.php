@props(['countuser'])
@props(['countcontact'])
<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Total Subscribers -->
        <div class="bg-white rounded-lg shadow-md p-6  hover:bg-gray-100">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Total Subscribers</h2>
            <p class="text-2xl font-bold text-gray-900 mb-2">{{ $countuser }}.00</p>
            <p class="text-green-600 flex items-center">
                Increased by 2
                <i class="fa fa-arrow-up ml-1"></i>
            </p>
            <a href="{{ route('listUsers') }}" class="text-blue-600 mt-4">View all</a>
        </div>
    
        <!-- Card 2: Avg. Open Rate -->
        <div class="bg-white rounded-lg shadow-md p-6  hover:bg-gray-100">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Customer message</h2>
            <p class="text-2xl font-bold text-gray-900 mb-2">{{ $countcontact }}.00</p>
            <p class="text-green-600 flex items-center">
                Increased by 5.4%
                <i class="fa fa-arrow-up ml-1"></i>
            </p>
            <a href="#" class="text-blue-600 mt-4">View all</a>
        </div>
    
        <!-- Card 3: Avg. Click Rate -->
        <div class="bg-white rounded-lg shadow-md p-6  hover:bg-gray-100">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Avg. Click Rate</h2>
            <p class="text-2xl font-bold text-gray-900 mb-2">24.57%</p>
            <p class="text-red-500 flex items-center">
                Decreased by 3.2%
                <i class="fa fa-arrow-down ml-1"></i>
            </p>
            <a href="#" class="text-blue-600 mt-4">View all</a>
        </div>
    </div>
</div>