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
            $table->char('model_user_id', 36);
            $table->date('dob')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('telephone')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->boolean('gender')->nullable();
            $table->text('about')->nullable();
            $table->string('model_categories')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('model_profiles', function(Blueprint $table) {
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
        Schema::dropIfExists('model_profiles');
    }

}
