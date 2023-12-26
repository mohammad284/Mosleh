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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('age');
            $table->timestamps();
        });
        DB::table('cars')->insert([
            ['type' => 'BMW','age'=>'2002'],
            ['type' => 'BMW','age'=>'2022'],
            ['type' => 'oudi','age'=>'2022'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
