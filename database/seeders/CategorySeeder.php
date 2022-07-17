<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
        ->count(7)
        ->state(new Sequence(
            ['name' => 'summer','description' =>'summer'],
            ['name' => 'winter' ,'description' =>'winter'],
            ['name' => 'sporte' ,'description' =>'sporte'],
            ['name' => 'kids' ,'description' =>'kids'],
            ['name' => 'new collection' ,'description' =>'new collection'],
            ['name' => 'Official' ,'description' =>'Official'],
            ['name' => 'Sale' ,'description' =>'Sale'],
            ))
        ->create();
    }
}
