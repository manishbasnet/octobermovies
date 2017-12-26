<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteManishbasnetMoviesUserrole extends Migration
{
    public function up()
    {
        Schema::dropIfExists('manishbasnet_movies_userrole');
    }
    
    public function down()
    {
        Schema::create('manishbasnet_movies_userrole', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('role', 255);
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('role_code', 255);
        });
    }
}
