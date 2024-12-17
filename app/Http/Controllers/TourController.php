<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    // Метод для отображения списка туров
    public function index()
    {
        // Получаем список туров из базы данных
        $tours = \App\Models\Tour::all();

        // Возвращаем вид с передачей данных
        return view('tours.index', compact('tours'));
    }

    // Метод для отображения деталей тура
    public function show($id)
    {
        // Находим тур по ID
        $tour = \App\Models\Tour::findOrFail($id);

        // Возвращаем вид с передачей данных
        return view('tours.show', compact('tour'));
    }

    // Метод для поиска туров
    public function search(Request $request)
    {
        $query = \App\Models\Tour::query();

        if ($request->has('destination')) {
            $query->where('destination', 'like', '%' . $request->destination . '%');
        }

        if ($request->has('price')) {
            $query->where('price', '<=', $request->price);
        }

        $tours = $query->get();

        return view('tours.search', compact('tours'));
    }
}
