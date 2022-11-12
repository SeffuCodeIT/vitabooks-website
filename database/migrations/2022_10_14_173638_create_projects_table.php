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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->longText('project_body')->nullable();
            $table->longText('project_short_desc')->nullable();
            $table->longText('project_success')->nullable();
            $table->longText('project_pillar')->nullable();
            $table->longText('project_pillara')->nullable();
            $table->longText('project_pillarb')->nullable();
            $table->longText('project_pillarc')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('project_cost')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
