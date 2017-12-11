<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelProfilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('model_profiles', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('model_id', 36);

            $table->date('dob')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('telephone')->nullable();
            $table->boolean('gender')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('model_profiles', function(Blueprint $table) {
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
        Schema::dropIfExists('model_profiles');
    }

}
