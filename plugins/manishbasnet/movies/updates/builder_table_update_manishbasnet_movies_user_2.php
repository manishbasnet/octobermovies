<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMoviesUser2 extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_user', function($table)
        {
            $table->string('token', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_user', function($table)
        {
            $table->string('token', 255)->nullable(false)->change();
        });
    }
}
