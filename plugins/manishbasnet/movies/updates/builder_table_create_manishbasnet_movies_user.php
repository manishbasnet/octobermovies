<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateManishbasnetMoviesUser extends Migration
{
    public function up()
    {
        Schema::create('manishbasnet_movies_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->string('password');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('manishbasnet_movies_user');
    }
}
