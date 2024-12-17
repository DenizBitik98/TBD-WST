@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Свяжитесь с нами</h1>
    <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">
        Мы всегда рады вашим вопросам и предложениям. Свяжитесь с нами по указанным контактам или заполните форму ниже.
    </p>

    <div class="mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Контактная информация</h2>
        <p class="text-lg text-gray-600 dark:text-gray-300">Email: <a href="mailto:info@tbd.kz" class="text-blue-500 hover:underline">info@tbd.kz</a></p>
        <p class="text-lg text-gray-600 dark:text-gray-300">Телефон: +7 (701) 123-45-67</p>
        <p class="text-lg text-gray-600 dark:text-gray-300">Адрес: г. Алматы, проспект Абая, 10</p>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Форма обратной связи</h2>
        <form method="POST" action="{{ route('support.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Имя</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:ring-blue-500 dark:focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:ring-blue-500 dark:focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Сообщение</label>
                <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:ring-blue-500 dark:focus:ring-blue-500" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Отправить</button>
        </form>
    </div>
</div>
@endsection
