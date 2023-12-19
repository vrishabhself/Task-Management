<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Task::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(3),
                'due_date' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'status' => $faker->numberBetween(0, 2), // Random integer value for status (0, 1, or 2)
            ]);
        }
    }
}
