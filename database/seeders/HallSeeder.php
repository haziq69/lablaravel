<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $halls_seed = [
            ['id'=>'1','lecture_hall_name'=>'Dewan Seminar 1A','lecture_hall_place'=>'Blok Kuliah'],
            ['id'=>'2','lecture_hall_name'=>'Dewan Seminar 2A','lecture_hall_place'=>'Blok Kuliah'],
            ['id'=>'3','lecture_hall_name'=>'Dewan Seminar 3A','lecture_hall_place'=>'Blok Kuliah'],
            ['id'=>'4','lecture_hall_name'=>'Dewan Seminar 4A','lecture_hall_place'=>'Blok Kuliah'],
            ['id'=>'5','lecture_hall_name'=>'Dewan Auditorium','lecture_hall_place'=>'Blok Kuliah'],
            ];

            foreach ($halls_seed as $halls_seed)
        {
            Hall::firstOrCreate($halls_seed);
        }
    }
}
