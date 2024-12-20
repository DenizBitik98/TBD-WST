@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <!-- Hero Section -->
    <div class="hero bg-cover bg-center text-white py-20" style="background-color: #007BFF;">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Добро пожаловать в TBD</h1>
            <p class="text-lg mt-4">Ваш лучший выбор для путешествий и туров в сфере B2B</p>
            <a href="{{ route('about') }}" class="btn btn-primary mt-12" aria-label="Узнать больше">Узнать больше</a>
        </div>
    </div>

    <!-- Почему выбирают нас -->
    <div class="bg-white py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold">Почему выбирают нас?</h2>
            <p class="mt-4">Мы предоставляем надежные решения для туристических агентств.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                @foreach ($reasons as $item)
                    <div class="reason-card p-4 bg-white shadow rounded">
                        <h3 class="text-xl font-semibold">{{ $item['icon'] }} {{ $item['title'] }}</h3>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <x-cta-section 
        title="Готовы начать?"
        description="Свяжитесь с нами для сотрудничества или получения информации!"
        button-text="Связаться с нами"
        button-link="{{ route('contact') }}" 
    />
@endsection
