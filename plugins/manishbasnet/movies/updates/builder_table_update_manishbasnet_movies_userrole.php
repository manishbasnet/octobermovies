<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMoviesUserrole extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_userrole', function($table)
        {
            $table->integer('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_userrole', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
