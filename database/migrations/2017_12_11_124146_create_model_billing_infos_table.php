<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBillingInfosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('model_billing_infos', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('model_id', 36);
            $table->string('project_hourly_cost')->nullable();
            $table->string('project_half_day_cost')->nullable();
            $table->string('project_full_day_cost')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
        Schema::table('model_billing_infos', function(Blueprint $table) {
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
        Schema::dropIfExists('model_billing_infos');
    }

}
