<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMovies2 extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_', function($table)
        {
            $table->string('slug', 10)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_', function($table)
        {
            $table->integer('slug')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
