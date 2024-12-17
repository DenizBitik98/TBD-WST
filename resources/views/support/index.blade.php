@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <h1 class="text-2xl font-bold mb-4">Свяжитесь с поддержкой</h1>

    <form method="POST" action="{{ route('support.store') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Ваше имя:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Ваш email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700">Сообщение:</label>
            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Отправить
        </button>
    </form>
</div>
@endsection
