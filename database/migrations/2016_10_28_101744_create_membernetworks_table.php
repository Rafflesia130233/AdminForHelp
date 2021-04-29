<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembernetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('membernetworks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('user_id');
            $table->string('slug');
            $table->string('email');
            $table->string('views');
            $table->string('weblink');
            $table->string('positioninorganization');
            $table->string('purposeinvolvement');
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
        Schema::drop('membernetworks');
    }
}