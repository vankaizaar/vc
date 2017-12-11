<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudioTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('audio', function (Blueprint $table) {
            $table->increments('id');
            $table->char('artist_id', 36);
            $table->string('link')->nullable();
            $table->string('about_album')->nullable();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('language')->nullable();


            $table->timestamps();
        });
        Schema::table('audio', function(Blueprint $table) {
            $table->foreign('artist_id')
                    ->references('id')->on('artists')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('audio');
    }

}
