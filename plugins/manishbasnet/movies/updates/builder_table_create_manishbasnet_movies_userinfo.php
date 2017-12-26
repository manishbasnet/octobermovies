<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateManishbasnetMoviesUserinfo extends Migration
{
    public function up()
    {
        Schema::create('manishbasnet_movies_userinfo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('manishbasnet_movies_userinfo');
    }
}
