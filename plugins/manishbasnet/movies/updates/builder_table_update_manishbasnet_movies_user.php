<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMoviesUser extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_user', function($table)
        {
            $table->string('token');
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_user', function($table)
        {
            $table->dropColumn('token');
        });
    }
}
