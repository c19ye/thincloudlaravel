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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id')->nullable();
            $table->integer('user_read')->nullable();
            $table->integer('user_write')->nullable();
            $table->integer('user_create')->nullable();
            $table->integer('content_read')->nullable();
            $table->integer('content_write')->nullable();
            $table->integer('content_create')->nullable();
            $table->integer('disputes_read')->nullable();
            $table->integer('disputes_write')->nullable();
            $table->integer('disputes_create')->nullable();
            $table->integer('database_read')->nullable();
            $table->integer('database_write')->nullable();
            $table->integer('database_create')->nullable();
            $table->integer('financial_read')->nullable();
            $table->integer('financial_write')->nullable();
            $table->integer('financial_create')->nullable();
            $table->integer('reporting_read')->nullable();
            $table->integer('reporting_write')->nullable();
            $table->integer('reporting_create')->nullable();
            $table->integer('apicontrol_read')->nullable();
            $table->integer('apicontrol_write')->nullable();
            $table->integer('apicontrol_create')->nullable();
            $table->integer('repository_read')->nullable();
            $table->integer('repository_write')->nullable();
            $table->integer('repository_create')->nullable();
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
        Schema::dropIfExists('roles');
    }
};
