<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('programs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');$table->text('description');$table->text('objective');$table->text('approach');$table->text('outcomes');$table->string('user_id');$table->string('views');$table->string('file');$table->text('overall');
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
        Schema::drop('programs');
    }
}