<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBodyFieldInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('body');
            $table->integer('template_id')->unsigned()->default(1)->after('id');

            $table->foreign('template_id')
                ->references('id')->on('templates')
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
            $table->text('body')->after('description');
            $table->dropForeign('orders_template_id_foreign');
            $table->dropColumn('template_id');
        });
    }
}
