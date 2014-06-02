<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_live')->default(false);
            $table->string('main_image')->nullable();
            $table->string('show_date')->nullable();
            $table->string('show_location')->nullable();
            $table->string('show_time')->nullable();
            $table->text('description')->nullable();
            $table->string('headliner')->nullable();
            $table->string('supporting_cast')->nullable();
            $table->string('show_link')->nullable();
            $table->string('save_the_date')->nullable();

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
        Schema::drop('dashboard');
    }

}
