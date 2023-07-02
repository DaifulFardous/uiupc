<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
Use App\Models\Problem;
class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 20; $i++){
            $problem = new Problem();
            $problem->cat_id = rand(1,10);
            $problem->name = $faker->name;
            $problem->description = $faker->realText(80);
            $problem->output = "HelloWorld";
            $problem->save();
        }
    }
}