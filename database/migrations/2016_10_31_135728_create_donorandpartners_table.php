<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorandpartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('donorandpartners', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('donationfor');
            $table->string('organizationname');
            $table->text('description');
            $table->string('user_id');
            $table->string('views');
            $table->string('image');
            $table->string('overall');
            $table->string('donationammount');
            $table->string('donorandorpartner');
            $table->string('fieldofdonation');
            $table->string('fieldofpartnership');
            $table->string('weblink');
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
        Schema::drop('donorandpartners');
    }
}