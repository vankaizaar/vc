<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPicturesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('model_pictures', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('model_album_id', 36);
            $table->char('model_user_id', 36);
            $table->string('link')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('model_pictures', function(Blueprint $table) {
            $table->foreign('model_album_id')
                    ->references('id')->on('model_albums')
                    ->onDelete('cascade');
        });
        Schema::table('model_pictures', function(Blueprint $table) {
            $table->foreign('model_user_id')
                    ->references('id')->on('model_users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('model_pictures');
    }

}
