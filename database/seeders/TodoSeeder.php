<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TodoGroup;
use App\Models\TodoItem;


class TodoSeeder extends Seeder
{
   
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $group = TodoGroup::create([
                'name' => $faker->word
            ]);

            for ($j = 0; $j < 20; $j++) {
                TodoItem::create([
                    'title' => $faker->sentence,
                    'description' => $faker->paragraph,
                    'isCompleted' => $faker->boolean,
                    'group_id' => $group->id
                ]);
            }
        }
    }
}
