<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSearchesTable extends Migration
{
    public function up()
    {
        Schema::table('searches', function (Blueprint $table) {
            $table->unsignedBigInteger('source_id')->nullable();
            $table->foreign('source_id', 'source_fk_7649410')->references('id')->on('news_sources');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_7648347')->references('id')->on('users');
        });
    }
}
