<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'kind_id' => 1,
            'body' => '%username%, g.%group%, %faculty%<br>'
                        .'%order_kind%, %order_type%<br>'
                        .'%where_place%<br>%where_body%',
        ]);
        DB::table('templates')->insert([
            'kind_id' => 2,
            'body' => '%username%, g.%group%, %faculty%<br>'
                .'Order kind: %order_kind%<br>Type: %order_type%<br>'
                .'Date: %gap_date%<br>Whom: %whom_teacher%<br>'
                .'Reason: %gap_reason_type%<br>%gap_reason_body%',
        ]);
    }
}
