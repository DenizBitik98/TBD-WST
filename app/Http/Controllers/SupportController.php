<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Отображает страницу службы поддержки.
     */
    public function index()
    {
        return view('support.index'); // Убедитесь, что этот файл существует в папке resources/views/support
    }

    /**
     * Обрабатывает отправленные формы службы поддержки.
     */
    public function store(Request $request)
    {
        // Валидация данных формы
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Логика обработки (например, отправка на email или сохранение в базу данных)
        // Mail::to('support@tbd.kz')->send(new SupportMail($request->all()));

        // Возвращаем сообщение об успехе
        return redirect()->back()->with('success', 'Ваш запрос отправлен! Мы скоро с вами свяжемся.');
    }
}
