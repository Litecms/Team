<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: teams
         */
        Schema::create(config('litecms.team.team.model.table'), function ($table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->string('description', 2555)->nullable();
            $table->text('image')->nullable();
            $table->text('link')->nullable();
            $table->integer('order')->nullable();
            $table->string('slug', 2555)->nullable();
            $table->integer('user_id')->nullable();
            $table->text('user_type')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.team.team.model.table'));
    }
}
