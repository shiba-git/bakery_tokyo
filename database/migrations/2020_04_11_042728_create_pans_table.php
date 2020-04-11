<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pans', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('panname')->comment('パンの名前');
            $table->string('storename')->comment('店名');
            $table->string('image')->comment('画像');
            $table->boolean('permit')->default(false)->comment('投稿許可');
            $table->string('closeststation')->nullable()->comment('最寄り駅');
            $table->string('instagramid')->nullable()->comment('インスタ');
            $table->string('storepath')->nullable()->comment('お店のリンク');
            $table->integer('tag_id')->nullable()->comment('タグのid');
            $table->integer('store_id')->nullable()->comment('店のid');
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
        Schema::dropIfExists('pan');
    }
}
