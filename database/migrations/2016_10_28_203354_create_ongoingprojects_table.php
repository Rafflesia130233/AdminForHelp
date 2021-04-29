<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOngoingprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ongoingprojects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('user_id');
            $table->string('views');
            $table->string('image');
            $table->string('overall');
            $table->text('location');
            $table->text('fundingsource');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ongoingprojects');
    }
}