<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                    

        DB::table('users')->insert([
            'name' => 'Calvin',            
            'role' => 'admin',              
            'email' => 'calvin@fomoevents.com',            
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Brian',            
            'role' => 'admin',              
            'email' => 'brian@fomoevents.com',            
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'George',            
            'role' => 'admin',              
            'email' => 'george@fomoevents.com',            
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Carl',            
            'role' => 'admin',              
            'email' => 'carl@fomoevents.com',            
            'password' => Hash::make('password'),
        ]);
    }
}
