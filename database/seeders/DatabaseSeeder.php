<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Отключение проверок внешних ключей
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Очистка таблиц
        DB::table('posts')->truncate();
        DB::table('users')->truncate();

        // Включение проверок внешних ключей
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Заполнение таблиц данными
        User::factory(10)->create();

        // Создание тестового пользователя
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Вызов сидера для таблицы posts
        $this->call(PostsTableSeeder::class);
    }
}
