<?php

namespace Database\Seeders;

use App\Models\Grader;
use Illuminate\Database\Seeder;

class GraderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grader::factory(2)->create();
    }
}