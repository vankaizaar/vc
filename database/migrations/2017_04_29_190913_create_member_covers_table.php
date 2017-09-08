<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('member_covers', function (Blueprint $table) {
            $table->increments('id');
            $table->char('member_id',36);
            
            $table->string('link')->nullable();
            $table->timestamps();
        });
        Schema::table('member_covers', function(Blueprint $table) {
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
         Schema::dropIfExists('member_covers');
    }
}
