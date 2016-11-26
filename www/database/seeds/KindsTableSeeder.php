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
            'name' => 'Sheet',
        ]);
        DB::table('kinds')->insert([
            'name' => 'Reference',
        ]);
    }
}
