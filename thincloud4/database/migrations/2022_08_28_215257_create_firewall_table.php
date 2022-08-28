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
        Schema::create('firewall', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('rule_name');
            $table->boolean('state');
            $table->json('rule_actions')->nullable();
            $table->string('url');
            $table->string('rule_validity');
            $table->string('policy_name')->nullable();
            $table->json('policy_actions')->nullable();
            $table->json('domains')->nullable();
            $table->string('policy_validity')->nullable();
            $table->boolean('force_rules');
            $table->boolean('auto_update');
            $table->boolean('critical_notification');
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
        Schema::dropIfExists('firewall');
    }
};
