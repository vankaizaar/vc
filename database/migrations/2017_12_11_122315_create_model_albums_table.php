<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelAlbumsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('model_albums', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('model_user_id', 36);
            $table->string('title')->nullable();
            $table->string('about_album')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('model_albums', function(Blueprint $table) {
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
        Schema::dropIfExists('model_albums');
    }

}
