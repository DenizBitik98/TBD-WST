<?php

use Illuminate\Support\Facades\Route;

// Главная страница с использованием контроллера для передачи данных в представление
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Статические страницы
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Каталог туров
Route::prefix('tours')->group(function () {
    Route::get('/', [\App\Http\Controllers\TourController::class, 'index'])->name('tours.index');
    Route::get('/{id}', [\App\Http\Controllers\TourController::class, 'show'])->name('tours.show')
         ->whereNumber('id'); // Ограничение на числовой параметр
    Route::get('/search', [\App\Http\Controllers\TourController::class, 'search'])->name('tours.search');
});

// Личный кабинет партнёра
Route::middleware(['auth', 'partner'])->prefix('partners')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings', [\App\Http\Controllers\PartnerController::class, 'settings'])->name('partners.settings');
    Route::post('/settings', [\App\Http\Controllers\PartnerController::class, 'update'])->name('partners.update');
});

// Управление отзывами
Route::middleware('auth')->prefix('reviews')->group(function () {
    Route::post('/', [\App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');
    Route::delete('/{id}', [\App\Http\Controllers\ReviewController::class, 'destroy'])->name('reviews.destroy')
         ->whereNumber('id'); // Ограничение на числовой параметр
});

// Новости и блог
Route::prefix('news')->group(function () {
    Route::get('/', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
    Route::get('/{slug}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show')
         ->whereAlphaNumeric('slug'); // Ограничение на буквенно-цифровой параметр
});

// Административная панель
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/partners', [\App\Http\Controllers\PartnerController::class, 'index'])->name('admin.partners.index');
    Route::delete('/partners/{id}', [\App\Http\Controllers\PartnerController::class, 'destroy'])->name('admin.partners.destroy')
         ->whereNumber('id'); // Ограничение на числовой параметр
});

// Смена языка
Route::get('set-language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ru', 'kz'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('set.language')
  ->whereAlpha('locale'); // Ограничение на алфавитный параметр

// Служба поддержки
Route::prefix('support')->group(function () {
    Route::get('/', [\App\Http\Controllers\SupportController::class, 'index'])->name('support.index');
    Route::post('/', [\App\Http\Controllers\SupportController::class, 'store'])->name('support.store');
});

// Подключение дополнительных маршрутов
collect(['auth', 'admin', 'api'])->each(function ($file) {
    require __DIR__ . "/{$file}.php";
});
