<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMovies3 extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
