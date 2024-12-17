<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Вставка тестовых данных в таблицу posts
        DB::table('posts')->insert([
            [
                'title' => 'Первый пост',
                'content' => 'Это содержимое первого поста.',
                'user_id' => 1, // Связь с таблицей users
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Второй пост',
                'content' => 'Это содержимое второго поста.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Третий пост',
                'content' => 'Это содержимое третьего поста.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
