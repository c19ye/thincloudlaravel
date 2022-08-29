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
        Schema::create('backups', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('virtual_machine_id')->unique();
            $table->string('backup_number')->unique();
            $table->string('backup_frequency');
            $table->string('backup_technology');
            $table->string('crypt_method');
            $table->string('what_backup');
            $table->string('backup_location');
            $table->string('delete_backup');
            $table->float('size')->nullable();
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
        Schema::dropIfExists('backups');
    }
};
