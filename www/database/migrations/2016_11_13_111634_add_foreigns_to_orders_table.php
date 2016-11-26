<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('kind_id')->unsigned()->after('status');
            $table->integer('user_id')->unsigned()->after('status');

            $table->foreign('kind_id')
                ->references('id')->on('kinds')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_kind_id_foreign');
            $table->dropForeign('orders_user_id_foreign');

            $table->dropColumn(['kind_id', 'user_id']);
        });
    }
}
