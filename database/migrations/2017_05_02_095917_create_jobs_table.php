<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('member_id', 36);

            $table->string('title');
            $table->text('description');
            $table->text('script');
            $table->string('delivery');
            $table->string('duration');
            $table->string('cost');
            $table->date('due_date')->nullable();
            $table->boolean('assigned')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('jobs', function(Blueprint $table) {
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
        Schema::dropIfExists('jobs');
    }

}
