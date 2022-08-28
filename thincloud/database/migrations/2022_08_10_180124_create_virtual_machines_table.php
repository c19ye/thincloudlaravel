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
        Schema::create('virtual_machines', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('thincloudname')->unique();
            $table->string('thincloudid')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('username');
            $table->string('location');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->integer('status')->nullable();
            $table->integer('role_id')->nullable();
            $table->string('billing')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('my_plans_id');
            $table->integer('operating_system_id');
            $table->integer('backup_id')->nullable();
            $table->boolean('auto_shutdown')->nullable();
            $table->boolean('auto_turnon')->nullable();
            $table->boolean('critical_notification')->nullable();
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
        Schema::dropIfExists('virtual_machines');
    }
};
