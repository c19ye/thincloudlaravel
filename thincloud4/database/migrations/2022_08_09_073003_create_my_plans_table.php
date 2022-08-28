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
        Schema::create('my_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //$table->blob('image');
            //$table->string('period');
            $table->float('price');
            $table->string('features1');
            $table->string('features2');
            $table->string('features3')->nullable();
            $table->string('features4')->nullable();
            $table->string('features5')->nullable();
            $table->string('features6')->nullable();
            $table->string('features7')->nullable();
            $table->string('features8')->nullable();
            // $table->date('start_date');
            //$table->date('end_date');
            //$table->integer('virtual_machine_id');
            $table->date('deleted_date')->nullable();
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
        Schema::dropIfExists('my_plans');
    }
};
