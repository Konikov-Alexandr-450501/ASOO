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
            'name' => 'Exam',
        ]);
        DB::table('kinds')->insert([
            'name' => 'Course work',
        ]);
        DB::table('kinds')->insert([
            'name' => 'For parents',
        ]);
    }
}
