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
        Schema::create('knowledgebase_questions', function (Blueprint $table) {
            $table->id();
            $table->string('related_title');
            $table->string('related_question_1');
            $table->string('related_question_2');
            $table->string('related_question_3');
            $table->string('related_question_4');
            $table->string('related_question_5');
            $table->string('blog_title_1');
            //$table->date('updated_date');
            $table->string('blog_content_1');
            //$table->date('deleted_date');
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
        Schema::dropIfExists('knowledgebase_questions');
    }
};
