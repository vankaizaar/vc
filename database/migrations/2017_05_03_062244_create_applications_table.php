<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('applications', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('artist_id', 36);
            $table->char('job_id', 36);
            $table->char('member_id', 36);
            $table->boolean('accepted')->default(FALSE);
            $table->boolean('rejected')->default(FALSE);
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('applications', function(Blueprint $table) {
            $table->foreign('artist_id')
                    ->references('id')->on('artists')
                    ->onDelete('cascade');
            $table->foreign('job_id')
                    ->references('id')->on('jobs')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('applications');
    }

}
