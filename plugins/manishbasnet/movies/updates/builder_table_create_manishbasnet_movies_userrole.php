<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateManishbasnetMoviesUserrole extends Migration
{
    public function up()
    {
        Schema::create('manishbasnet_movies_userrole', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('role');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('manishbasnet_movies_userrole');
    }
}
