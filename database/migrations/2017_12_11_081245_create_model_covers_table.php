<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelCoversTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('model_covers', function (Blueprint $table) {
            $table->increments('id');
            $table->char('model_user_id', 36);

            $table->string('link')->nullable();
            $table->timestamps();
        });
        Schema::table('model_covers', function(Blueprint $table) {
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
        Schema::dropIfExists('model_covers');
    }

}
