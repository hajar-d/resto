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

                        <h1 class="text-2xl font-semibold text-gray-800 pt-4 my-4">Users</h1>
                        <ul role="list" class="divide-y divide-gray-100">
                            @foreach ($users as $user)
                            <li class="flex justify-between gap-x-6 py-4 hover:bg-gray-100 px-4">
                              <div class="flex min-w-0 gap-x-4">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://t3.ftcdn.net/jpg/05/53/79/60/360_F_553796090_XHrE6R9jwmBJUMo9HKl41hyHJ5gqt9oz.jpg" alt="">
                                <div class="min-w-0 flex-auto">
                                  <p class="text-sm font-semibold leading-6 text-gray-900">{{ $user->name }}</p>
                                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $user->email }}</p>
                                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $user->phone }}</p>
                                  <p class="text-sm font-semibold leading-6 {{ $user->usertype == 'admin' ? 'text-red-700' : 'text-blue-600' }}">
                                    {{ $user->usertype }}
                                </p>
                            </div>
                              </div>
                              <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                                @if ($user->last_activity)
                                  <p class="mt-1 text-xs leading-5 text-gray-500">
                                      Last seen <time datetime="{{ \Carbon\Carbon::createFromTimestamp($user->last_activity)->toIso8601String() }}">{{ \Carbon\Carbon::createFromTimestamp($user->last_activity)->diffForHumans() }}</time>
                                  </p>
                                @else
                                  <p class="mt-1 text-xs leading-5 text-gray-500">Never</p>
                                @endif
                                <p class="mt-1 text-xs leading-5 {{ $user->isOnline() ? 'text-green-500' : 'text-red-500' }}">
                                    {{ $user->isOnline() ? 'Online' : 'Offline' }}
                                </p>
                              </div>
                            </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>







{{-- <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Users</h2>
      </div>
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        @foreach ($users as $user)
            
        <li>
          <div class="flex items-center gap-x-6 hover:bg-gray-200">
            <img class="h-16 w-16 rounded-full" src="https://t3.ftcdn.net/jpg/05/53/79/60/360_F_553796090_XHrE6R9jwmBJUMo9HKl41hyHJ5gqt9oz.jpg" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $user->name }}</h3>
              <p class="text-sm font-semibold leading-6 text-gray-700">{{ $user->email }}</p>
              <p class="text-sm font-semibold leading-6 text-gray-700">{{ $user->phone }}</p>
              <p class="text-sm font-semibold leading-6 {{ $user->usertype == 'admin' ? 'text-red-700' : 'text-blue-600' }}">
                {{ $user->usertype }}
            </p>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
 --}}