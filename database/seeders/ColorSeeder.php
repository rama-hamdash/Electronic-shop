<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Color::factory()
        ->count(11)
        ->state(new Sequence(
            ['name' => 'black'],
            ['name' => 'white'],
            ['name' => 'red'],
            ['name' => 'blue'],
            ['name' => 'green'],
            ['name' => 'yellow'],
            ['name' => 'orange'],
            ['name' => 'pink'],
            ['name' => 'brown'],
            ['name' => 'purple'],
            ['name' => 'grey'],
        ))
        ->create();


    }
}
