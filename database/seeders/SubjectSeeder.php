<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $subjects_seed = [
            ['id'=>'1','subject_code'=>'ITT626','subject_name'=>'back end'],
            ['id'=>'2','subject_code'=>'ITT550','subject_name'=>'network design'],
            ['id'=>'3','subject_code'=>'TMC501','subject_name'=>'mandarin'],
            ['id'=>'4','subject_code'=>'CSC404','subject_name'=>'programming'],
            ['id'=>'5','subject_code'=>'CSP600','subject_name'=>'fyp'],
            ];

            foreach ($subjects_seed as $subjects_seed)
        {
            Subject::firstOrCreate($subjects_seed);
        }
    }
}
