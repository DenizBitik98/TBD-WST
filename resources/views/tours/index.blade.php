@extends('layouts.app')

@section('title', 'Каталог туров')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Каталог туров</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Пример карточки тура -->
        @foreach ($tours as $tour)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/tours/' . $tour->image) }}" alt="{{ $tour->title }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $tour->title }}</h2>
                <p class="text-gray-700 mb-4">{{ Str::limit($tour->description, 100) }}</p>
                <a href="{{ route('tours.show', $tour->id) }}" class="text-blue-500 hover:underline">Подробнее</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
