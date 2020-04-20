<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pan_tag', function (Blueprint $table) {
            $table->unsignedInteger('pan_id');
            $table->unsignedInteger('tag_id');
            $table->primary(['pan_id', 'tag_id']);
            $table->foreign('pan_id')
                ->references('id')
                ->on('pans')
                ->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pan_tag');
    }
}
