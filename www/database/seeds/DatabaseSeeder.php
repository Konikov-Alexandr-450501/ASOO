<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PoliciesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(KindsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        //$this->call(OrdersTableSeeder::class);
    }
}
