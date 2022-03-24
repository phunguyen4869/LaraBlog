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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->tinyInteger('published')->default(0);
            $table->longText('content');
            $table->timestamps();
            $table->timestamp('published_at');
        });

        //Foreign Key comment post
        Schema::table('post_comments', function($table) {
            $table->foreign('post_id')->references('id')->on('posts');
        });

        //Foreign Key comment parent
        Schema::table('post_comments', function($table) {
            $table->foreign('parent_id')->references('id')->on('post_comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_comments');
    }
};
