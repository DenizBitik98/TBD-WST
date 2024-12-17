<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tour::create([
            'name' => 'Тур в Анталию из Алматы',
            'description' => '8-дневный отдых в Анталии с проживанием в отелях 3–5 звёзд. Завтрак включён.',
            'destination' => 'Анталия, Турция',
            'price' => 234753,
            'duration' => 8,
            'start_date' => '2024-07-01',
            'end_date' => '2024-07-08',
        ]);

        Tour::create([
            'name' => 'Путешествие в Париж',
            'description' => '5-дневный тур в Париж с экскурсиями и проживанием в центре города.',
            'destination' => 'Париж, Франция',
            'price' => 350000,
            'duration' => 5,
            'start_date' => '2024-09-01',
            'end_date' => '2024-09-06',
        ]);
    }
}
