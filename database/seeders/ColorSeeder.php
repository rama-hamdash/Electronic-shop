<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $color = new Color;
        $color->name ="Red" ;
        $color->name ="Blue" ;
        $color->name ="Green" ;
        $color->name ="Yellow" ;
        $color->name ="Orange" ;
        $color->name ="Pink" ;
        $color->name ="Brown" ;
        $color->name ="Black" ;
        $color->name ="White" ;
        $color->name ="Purple" ;
        $color->name ="Grey" ;
        $color->save();


    }
}
