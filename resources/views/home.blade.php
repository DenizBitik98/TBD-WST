@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <!-- Hero Section -->
    <div class="hero bg-cover bg-center text-white py-20" style="background-color: #007BFF;">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Добро пожаловать в TBD</h1>
            <p class="text-lg mt-4">Ваш лучший выбор для путешествий и туров в сфере B2B</p>
            <a href="{{ route('tours.index') }}" class="btn btn-primary mt-12" aria-label="Посмотреть туры">Посмотреть туры</a>
        </div>
    </div>

    <!-- Почему выбирают нас -->
    <div class="bg-white py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold">Почему выбирают нас?</h2>
            <p class="mt-4">Мы предоставляем надежные решения для туристических агентств.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                @foreach ([
                    ['icon' => '🔒', 'title' => 'Надежность', 'desc' => 'Мы работаем с проверенными партнерами.'],
                    ['icon' => '🌍', 'title' => 'Широкий выбор', 'desc' => 'Туры, отели, трансферы и многое другое.'],
                    ['icon' => '📞', 'title' => 'Поддержка', 'desc' => 'Профессиональная поддержка 24/7.']
                ] as $item)
                    <div class="reason-card p-4 bg-white shadow rounded">
                        <h3 class="text-xl font-semibold">{{ $item['icon'] }} {{ $item['title'] }}</h3>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold">Готовы начать?</h2>
            <p class="mt-4">Свяжитесь с нами для сотрудничества или просмотра туров!</p>
            <a href="{{ route('contact') }}" class="btn btn-secondary mt-10" aria-label="Связаться с нами">Связаться с нами</a>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-dark text-white py-6">
        <div class="container mx-auto text-center">
            <p>© 2024 TOO TBD (Тибиди). Все права защищены.</p>
            <p>Свяжитесь с нами: <a href="mailto:info@tbd.kz" class="underline">info@tbd.kz</a></p>
        </div>
    </div>
@endsection

