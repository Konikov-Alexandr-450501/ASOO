<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('faculty_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('faculty_id')
                ->references('id')->on('faculties')
                ->onDelete('cascade');
            $table->foreign('type_id')
                ->references('id')->on('types')
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
            $table->dropForeign('orders_faculty_id_foreign');
            $table->dropForeign('orders_type_id_foreign');
            $table->dropForeign('orders_user_id_foreign');

            $table->dropColumn(['faculty_id', 'type_id', 'user_id']);
        });
    }
}
