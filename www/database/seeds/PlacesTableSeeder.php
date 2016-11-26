<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => 'On the job parents',
        ]);
        DB::table('places')->insert([
            'name' => 'To hostel',
        ]);
        DB::table('places')->insert([
            'name' => 'To Court',
        ]);
    }
}
