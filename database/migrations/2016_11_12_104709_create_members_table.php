<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('members', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');$table->text('description');$table->string('designation');$table->string('education');$table->string('profession');$table->string('remarks');$table->string('filePath');
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
        Schema::drop('members');
    }
}