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
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->timestamps();
        });
        DB::table('services')->insert([
            ['name' => 'كهربائي','icon'=>'null'],
            ['name' => 'دهان','icon'=>'null'],
            ['name' => 'لحام','icon'=>'null'],
            ['name' => 'ميكانيكي','icon'=>'null'],
        ]);
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
