<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->text('image');
            $table->string('ar_name');
            $table->string('en_name');
            $table->string('ar_job_title');
            $table->string('en_job_title');
            $table->longText('ar_details');
            $table->longText('en_details');
            $table->text('facebook')->nullable();
            $table->longText('twitter')->nullable();
            $table->longText('instagram')->nullable();
            $table->longText('gmail')->nullable();
            $table->longText('linkedin')->nullable();
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
        Schema::dropIfExists('people');
    }
}
