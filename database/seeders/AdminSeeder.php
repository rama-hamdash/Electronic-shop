<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;

        $admin->first_name = "admin" ;
        $admin->last_name = "Admin" ;
        $admin->email = "admin@gmail.com";
        $admin->password = Hash::make('12345678') ;
        $admin->mobile = "0991809858" ;
        $admin->active = true ;
        $admin->role = "admin" ;
        $admin->save();

    }
}
