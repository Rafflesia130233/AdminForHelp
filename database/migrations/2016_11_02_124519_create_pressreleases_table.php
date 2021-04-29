<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressreleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pressreleases', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');$table->text('description');$table->string('filePath');$table->string('source');$table->string('destination');$table->string('overall');
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
        Schema::drop('pressreleases');
    }
}