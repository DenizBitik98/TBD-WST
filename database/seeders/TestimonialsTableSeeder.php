<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Иван Иванов',
            'message' => 'Отличное обслуживание и удобные туры! Рекомендую.',
        ]);

        Testimonial::create([
            'name' => 'Анна Смирнова',
            'message' => 'Прекрасный выбор туров. Все на высшем уровне!',
        ]);
    }
}


