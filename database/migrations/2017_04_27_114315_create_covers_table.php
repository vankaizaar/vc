<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoversTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('covers', function (Blueprint $table) {
            $table->increments('id');
            $table->char('artist_id',36);
            
            $table->string('link')->nullable();
            $table->timestamps();
        });
        Schema::table('covers', function(Blueprint $table) {
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
        Schema::dropIfExists('covers');
    }

}
