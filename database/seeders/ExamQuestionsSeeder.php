<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExamQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ExamQuestions::factory()->count(10)->create();
    }
}
