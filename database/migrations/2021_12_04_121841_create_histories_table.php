<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('orderId');
            $table->string('type');
            $table->string('value');
            $table->bigInteger('total');
            $table->string('coin');
            $table->integer('status');
            $table->string('bankname');
            $table->string('acctnumber');
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
