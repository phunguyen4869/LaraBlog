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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->string('slug');
            $table->tinyText('summary')->nullable();
            $table->tinyInteger('published')->default(0);
            $table->longText('content');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        //Foreign Key author_id
        Schema::table('posts', function($table) {
            $table->foreign('author_id')->references('id')->on('users');
        });

        //Foreign Key parent_id
        Schema::table('posts', function($table) {
            $table->foreign('parent_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
