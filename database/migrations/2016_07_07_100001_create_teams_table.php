<?php

use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
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
        Schema::create('teams', function ($table) {
            $table->increments('id');
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('designation', 50)->nullable();
            $table->text('photo')->nullable();
            $table->text('description')->nullable();
            $table->enum('most_valuable_person', ['Yes', 'No'])->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('google_plus', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('tumblr', 100)->nullable();
            $table->string('gmail', 50)->nullable();
            $table->string('behance', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('slug', 200)->nullable();
            $table->enum('status', ['draft', 'published', 'hidden', 'suspended', 'spam'])->default('draft')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
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
        Schema::drop('teams');
    }
}
