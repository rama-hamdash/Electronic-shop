<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $size = new Size ;

        $size->name ="xs" ;
        $size->name ="s" ;
        $size->name ="m" ;
        $size->name ="l" ;
        $size->name ="xl" ;
        $size->name ="xxl" ;
        $size->name ="xxxl" ;
        $size->name ="xxxxl" ;


    }
}
