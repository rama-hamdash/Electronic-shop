<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::factory()
        ->count(7)
        ->state(new Sequence(
            ['name' => 'xs'],
            ['name' => 's'],
            ['name' => 'm'],
            ['name' => 'l'],
            ['name' => 'xl'],
            ['name' => 'xxl'],
            ['name' => 'xxxl'],
            ))
        ->create();


    }
}
