<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardofadvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('boardofadvisors', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');$table->string('filePath');$table->string('role');$table->string('address');$table->string('contact');$table->text('degree');
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
        Schema::drop('boardofadvisors');
    }
}