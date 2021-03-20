<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('main_category_id')->unsigned();
            $table->foreign('main_category_id')->references('id')->on('main_categories')->onDelete('cascade');
            $table->string('ar_name');
            $table->string('en_name');
            $table->longText('ar_details');
            $table->longText('en_details');
            $table->text('image');
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
        Schema::dropIfExists('products');
    }
}
