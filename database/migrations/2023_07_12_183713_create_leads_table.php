<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("name", 150);
            $table->string("nit", 150);
            $table->string("point_name", 150)->nullable(true);
            $table->string("team_name", 150)->nullable(true);
            $table->string("city", 150)->nullable(true);
            $table->string("promotor", 150)->nullable(true);
            $table->integer("rtc")->nullable(true);
            $table->string("captain", 150)->nullable(true);
            $table->string("terms", 150);
            $table->string("ip", 500);
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
        Schema::dropIfExists('leads');
    }
};
