<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Task::create([
            'title' => $faker->sentence(4),
            'description' => $faker->paragraph(),
            'deadline' => $faker->dateTimeBetween('now', '+1 week'),
            'status' => 0
        ]);
        Task::create([
            'title' => $faker->sentence(4),
            'description' => $faker->paragraph(),
            'deadline' => $faker->dateTimeBetween('now', '+1 week'),
            'status' => 1
        ]);
    }
}
