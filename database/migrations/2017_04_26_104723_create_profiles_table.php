<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('artist_id', 36);

            $table->date('dob')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('telephone')->nullable();
            $table->text('about')->nullable();
            $table->boolean('gender')->nullable();
            
            $table->string('native_language')->nullable();
            $table->string('voice_categories')->nullable();
            $table->string('project_5000_time')->nullable();
            $table->string('project_500_time')->nullable();
            $table->string('project_50_time')->nullable();
            $table->string('project_5_time')->nullable();
            $table->string('project_5000_cost')->nullable();
            $table->string('project_500_cost')->nullable();
            $table->string('project_50_cost')->nullable();
            $table->string('project_5_cost')->nullable();
            
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('profiles', function(Blueprint $table) {
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
        Schema::dropIfExists('profiles');
    }

}
