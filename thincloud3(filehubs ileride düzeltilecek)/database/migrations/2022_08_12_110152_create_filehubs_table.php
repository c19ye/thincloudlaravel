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
        Schema::create('filehubs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->integer('departman_id')->nullable();
            $table->double('storage_size');
            $table->double('used_storage');
            $table->string('backup_time');
            $table->boolean('permission');
            $table->integer('virtualmachine_id')->nullable();
            $table->string('location')->nullable();
            $table->date('updated_date')->nullable();
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
        Schema::dropIfExists('filehubs');
    }
};
