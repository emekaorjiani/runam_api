<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsSourcesTable extends Migration
{
    public function up()
    {
        Schema::create('news_sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_verified')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
