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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name')->nullable();
            $table->longText('book_summary')->nullable();
            $table->string('author_name')->nullable();
            $table->string('s_author_name')->nullable();
            $table->string('print_date')->nullable();
            $table->integer('book_price')->nullable();
            $table->string('cover_pic')->nullable();
            $table->string('back_pic')->nullable();
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
        Schema::dropIfExists('books');
    }
};
