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
        Schema::create('knowledgebase', function (Blueprint $table) {
            $table->id();
            $table->string('question_title_1');
            $table->string('question_content_1');
            $table->string('question_title_2');
            $table->string('question_content_2');
            $table->string('question_title_3');
            $table->string('question_content_3');
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
        Schema::dropIfExists('knowledgebase');
    }
};
