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
        Schema::create('artificials', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("specs")->nullable();
            $table->string("machine_type");//reactive, theory of mind, limited memory, self-aware
            $table->string("company");
            $table->string("developer");
            $table->string("origin");
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
        Schema::dropIfExists('artificials');
    }
};
