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
        Schema::create('services', function (Blueprint $table) {
            // $table->id('id');
            // $table->string('service_name');
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamps();
            $table->id();
             $table->string('service_name');
            $table->string('service_description');
            
        
           
           
            $table->string('service_price');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
    $table->timestamps();
    // $table->id();
    // $table->timestamps();
    // $table->string('service_name');
    // $table->integer('price');
    // $table->unsignedBigInteger('category_id');
    // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
