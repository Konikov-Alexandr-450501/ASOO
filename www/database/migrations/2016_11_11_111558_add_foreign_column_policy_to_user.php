<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignColumnPolicyToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::table('users', function (Blueprint $table) {
            $table->integer('policy_id')->unsigned()->after('id');
            $table->foreign('policy_id')
                ->references('id')->on('policies')
                ->onDelete('cascade');
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_policy_id_foreign');
            $table->dropColumn('policy_id');
        });
    }
}
