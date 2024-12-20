<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Отображает домашнюю страницу.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            // Данные для секции "Почему выбирают нас"
            $reasons = [
                ['icon' => '🔒', 'title' => 'Надежность', 'desc' => 'Мы работаем с проверенными партнерами.'],
                ['icon' => '🌍', 'title' => 'Широкий выбор', 'desc' => 'Туры, отели, трансферы и многое другое.'],
                ['icon' => '📞', 'title' => 'Поддержка', 'desc' => 'Профессиональная поддержка 24/7.']
            ];

            // Дополнительные данные
            $additionalData = [
                'welcomeMessage' => 'Добро пожаловать в TBD',
                'ctaText' => 'Свяжитесь с нами для сотрудничества!'
            ];
        } catch (\Exception $e) {
            // Логирование ошибки
            \Log::error('Ошибка загрузки данных на главной странице: ' . $e->getMessage());

            // Передача пустых данных в представление
            $reasons = [];
            $additionalData = [];
        }

        // Передача данных в представление
        return view('home', compact('reasons', 'additionalData'));
    }
}
