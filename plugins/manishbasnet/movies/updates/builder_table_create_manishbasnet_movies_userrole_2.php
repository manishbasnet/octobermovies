<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateManishbasnetMoviesUserrole2 extends Migration
{
    public function up()
    {
        Schema::create('manishbasnet_movies_userrole', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('role_code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('manishbasnet_movies_userrole');
    }
}
