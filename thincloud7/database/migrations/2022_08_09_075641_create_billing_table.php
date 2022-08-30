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
        Schema::create('billing', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('surname');
            $table->string('toll_address');
            $table->integer('toll_number');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->integer('zip_code');
            $table->string('phone_number');
            $table->string('email');
            $table->string('credit_card_type')->nullable();
            $table->string('credit_card_number')->nullable();
            $table->integer('credit_card_cvv')->nullable();
            $table->date('credit_card_expiration_date')->nullable();
            $table->integer('coupon_code')->nullable();
            $table->date('created_date')->nullable();
            $table->date('updated_date')->nullable();
            $table->date('deleted_date')->nullable();
            // //$table->binary('feather1_icon');
            // $table->string('feather1_title');
            // $table->string('feather1_content');
            // //$table->binary('feather2_icon');
            // $table->string('feather2_title');
            // $table->string('feather2_content');
            // //$table->binary('feather3_icon');
            // $table->string('feather3_title');
            // $table->string('feather3_content');
            // //$table->binary('feather4_icon');
            // $table->string('feather4_title');
            // $table->string('feather4_content');
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
        Schema::dropIfExists('billing');
    }
};
