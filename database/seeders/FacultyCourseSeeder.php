<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FacultyCourse;

class FacultyCourseSeeder extends Seeder
{
    public function run()
    {
        FacultyCourse::factory()->count(100)->create();
    }
}
