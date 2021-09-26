<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'about',
            'text' => 'This is the about section.',                         
        ]);

        DB::table('sections')->insert([
            'name' => 'event',
            'text' => 'This is the event section.',                         
        ]);

        DB::table('sections')->insert([
            'name' => 'digital',
            'text' => 'This is the digital section.',                         
        ]);

        DB::table('sections')->insert([
            'name' => 'create',
            'text' => 'This is the create section.',                         
        ]);

        DB::table('sections')->insert([
            'name' => 'art',
            'text' => 'This is the art section.',                         
        ]);

        DB::table('sections')->insert([
            'name' => 'contact',
            'text' => 'This is the contact section.',                         
        ]);
    }
}
