<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Testimonial;

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
            // Получение туров с пагинацией
            $tours = Tour::paginate(10);

            // Получение отзывов с пагинацией
            $testimonials = Testimonial::paginate(5);
        } catch (\Exception $e) {
            // Логирование ошибки
            \Log::error('Ошибка загрузки данных на главной странице: ' . $e->getMessage());
            
            // Передача пустых коллекций в представление
            $tours = collect([]);
            $testimonials = collect([]);
        }

        // Передача данных в представление
        return view('home', compact('tours', 'testimonials'));
    }
}
