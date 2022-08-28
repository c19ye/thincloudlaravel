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
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->integer('department_id')->nullable();
            $table->double('storage_size')->nullable();
            $table->double('used_storage')->nullable();
            $table->string('backup_time')->nullable();
            $table->boolean('permission')->nullable();
            $table->integer('virtualmachine_id')->nullable();
            $table->string('location')->nullable();
            $table->boolean('auto_backup')->nullable();
            $table->boolean('auto_scan')->nullable();
            $table->boolean('critical_notification')->nullable();
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
