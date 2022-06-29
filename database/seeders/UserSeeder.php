<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $user->first_name = "rama" ;
        $user->last_name = "hamdash" ;
        $user->email = "rama@gmail.com";
        $user->password = Hash::make('12345678') ;
        $user->mobile = "0991809858" ;
        $user->active = true ;
        $user->role = "user" ;
        $user->save();

    }
}
