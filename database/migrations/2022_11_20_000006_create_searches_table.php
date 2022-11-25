<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('news_title')->nullable();
            $table->string('website')->nullable();
            $table->integer('source');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
