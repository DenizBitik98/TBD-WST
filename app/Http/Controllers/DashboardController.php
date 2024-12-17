<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Отображение главной страницы личного кабинета.
     */
    public function index()
    {
        // Получение данных пользователя и связанных с ним бронирований или заказов
        $user = auth()->user();
        $bookings = $user->bookings()->latest()->get();

        // Возвращаем вид для личного кабинета
        return view('dashboard.index', compact('user', 'bookings'));
    }

    /**
     * Метод для обновления профиля пользователя.
     */
    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Валидация данных
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Обновление данных
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'] ? bcrypt($data['password']) : $user->password,
        ]);

        return redirect()->route('dashboard')->with('success', 'Профиль обновлен успешно.');
    }
}
