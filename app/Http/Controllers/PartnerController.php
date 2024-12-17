<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Отображение списка партнёров для администратора.
     */
    public function index()
    {
        // Получение всех партнёров
        $partners = \App\Models\Partner::all();

        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Отображение настроек партнёра.
     */
    public function settings()
    {
        $partner = auth()->user();

        return view('partners.settings', compact('partner'));
    }

    /**
     * Обновление данных партнёра.
     */
    public function update(Request $request)
    {
        $partner = auth()->user();

        // Валидация данных
        $data = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'phone' => 'nullable|string|max:20',
        ]);

        // Обновление данных партнёра
        $partner->update($data);

        return redirect()->route('partners.settings')->with('success', 'Данные успешно обновлены.');
    }

    /**
     * Удаление партнёра (только для администратора).
     */
    public function destroy($id)
    {
        $partner = \App\Models\Partner::findOrFail($id);
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Партнёр успешно удалён.');
    }
}
