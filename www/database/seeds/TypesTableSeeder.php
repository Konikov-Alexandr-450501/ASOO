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
            'name'    => 'Ordinary',
            'kind_id' => 1,
        ]);
        DB::table('types')->insert([
            'name'    => 'With the official stamp',
            'kind_id' => 1,
        ]);
        DB::table('types')->insert([
            'name'    => 'Exam',
            'kind_id' => 2,
        ]);
        DB::table('types')->insert([
            'name'    => 'Credit',
            'kind_id' => 2,
        ]);
        DB::table('types')->insert([
            'name'    => 'Course work',
            'kind_id' => 2,
        ]);
    }
}
