@section('title')
    Accueil
@endsection
@section('title')
    Menu
@endsection
@extends('layouts.master')
@section('main')
<div class="bg-white">
    <div class="mx-auto max-w-2xl sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-3xl pb-8 font-semibold text-gray-800 mb-6">Menu</h2>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
            @foreach($plats as $plat)
            <a href="{{ route('detailplat', ['id' => $plat->id]) }}" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ $plat->image }}" alt="{{ $plat->name }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">{{ $plat->nom }}</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $plat->price }} MAD</p>
            </a>
            @endforeach
        </div>
        {{-- <div class="mt-5">

            {{ $plats->links() }}
        </div> --}}
    </div>
</div>
@endsection
