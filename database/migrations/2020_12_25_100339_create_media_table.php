<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     * command: bash -c 'php artisan migrate:fresh && php artisan serve'
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('media_id');
            $table->timestamps();
            $table->string('name');
            $table->string('author');
            $table->string('abstract');
            $table->string('file_url');
            $table->string('file_thumb_url');
            $table->integer('category_id');
            //$table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
