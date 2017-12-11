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
            $table->increments('id');
            $table->char('model_id', 36);
            $table->char('album_id', 36);
            $table->string('link')->nullable();

            $table->timestamps();
        });
        Schema::table('model_pictures', function(Blueprint $table) {
            $table->foreign('model_id')
                    ->references('id')->on('models')
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
