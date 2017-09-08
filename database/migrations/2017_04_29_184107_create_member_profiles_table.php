<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('member_profiles', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('member_id',36);
                       
            $table->date('dob')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('telephone')->nullable();            
            $table->boolean('gender')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('member_profiles', function(Blueprint $table) {
           $table->foreign('member_id')
                    ->references('id')->on('members')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('member_profiles');
    }
}