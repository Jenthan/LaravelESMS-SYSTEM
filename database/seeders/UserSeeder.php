<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

        'name' => 'Admin',//Str::random(10),
        'email' => 'admin@gmail.com',//Str::random(10).'@gmail.com', 
        'password' => Hash::make('test123'),   
        'gender'=>'m',
        'role'=>'admin',
        'address'=>'batticaloa',
        'mobileno'=>'0776547890',

        'remember_token' => Str::random(10),

    
      ]);

   
    }
}
