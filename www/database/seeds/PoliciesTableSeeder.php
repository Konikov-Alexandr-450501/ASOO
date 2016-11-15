<?php

use Illuminate\Database\Seeder;

class PoliciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('policies')->insert([
            'name' => 'Student',
        ]);
        DB::table('policies')->insert([
            'name' => 'Faculty Manager',
        ]);
    }
}
