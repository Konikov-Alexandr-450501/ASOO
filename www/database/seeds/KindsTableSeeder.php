<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kinds')->insert([
            'name' => 'Ordinary',
        ]);
        DB::table('kinds')->insert([
            'name' => 'With the official stamp',
        ]);
        DB::table('kinds')->insert([
            'name' => 'Exam',
        ]);
        DB::table('kinds')->insert([
            'name' => 'Credit',
        ]);
        DB::table('kinds')->insert([
            'name' => 'Course work',
        ]);
    }
}
