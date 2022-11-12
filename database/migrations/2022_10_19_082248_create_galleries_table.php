<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->longText("album_name");
            $table->string("cover_pic");
            $table->string("cover_pica");
            $table->string("cover_picb");
            $table->string("cover_picc");
            $table->string("cover_picd");
            $table->string("cover_pice");
            $table->string("cover_picf");
            $table->string("cover_picg");
            $table->string("cover_pich");
            $table->string("cover_pici");
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
        Schema::dropIfExists('galleries');
    }
};
