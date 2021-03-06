<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMoviesUser3 extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_user', function($table)
        {
            $table->integer('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_user', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
