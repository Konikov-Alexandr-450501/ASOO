<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Ordinary',
        ]);
        DB::table('types')->insert([
            'name' => 'With the official stamp',
        ]);
        DB::table('types')->insert([
            'name' => 'Exam',
        ]);
        DB::table('types')->insert([
            'name' => 'Credit',
        ]);
        DB::table('types')->insert([
            'name' => 'Course work',
        ]);
    }
}
