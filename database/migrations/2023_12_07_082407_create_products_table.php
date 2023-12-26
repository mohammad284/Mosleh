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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('size')->nullable();
            $table->unsignedBigInteger('car_id');
            // $table->foreign('car_id')->references('id')->on('cars');
            $table->integer('price');
            $table->timestamps();
        });
        DB::table('products')->insert([
            ['user_id' => 1,'category_id'=>1 , 'name'=>'name' , 'description' => 'description','size'=>'xl','car_id'=>1,'price'=>100],

        ]);
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
};
