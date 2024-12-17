<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Отображает список всех новостей.
     */
    public function index()
    {
        // Здесь вы можете получить данные из модели News
        // Например: $news = \App\Models\News::all();

        return view('news.index'); // Укажите правильный путь к вашему шаблону
    }

    /**
     * Отображает конкретную новость по её идентификатору или slug.
     * 
     * @param string $slug
     */
    public function show($slug)
    {
        // Здесь вы можете найти новость по slug
        // Например: $news = \App\Models\News::where('slug', $slug)->firstOrFail();

        return view('news.show'); // Укажите правильный путь к вашему шаблону
    }
}
