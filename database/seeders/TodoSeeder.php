<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TodoGroup;
use App\Models\TodoItem;


class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $group = TodoGroup::create([
                'name' => $faker->word
            ]);

            for ($j = 0; $j < 10; $j++) {
                TodoItem::create([
                    'title' => $faker->sentence,
                    'description' => $faker->paragraph,
                    'completed' => $faker->boolean,
                    'group_id' => $group->id
                ]);
            }
        }
    }
}
