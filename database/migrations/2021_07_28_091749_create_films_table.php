<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('release_year')->nullable();
            $table->integer('language_id');
            $table->integer('rental_duration');
            $table->double('rental_rate');
            $table->integer('length')->nullable();
            $table->double('replacement_cost');
            $table->string('rating')->nullable();
            $table->timestamps();
            $table->text('special_features')->nullable();
            $table->text('fulltext')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
